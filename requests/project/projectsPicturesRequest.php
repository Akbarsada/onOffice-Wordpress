<?php

use onOffice\SDK\onOfficeSDK;
include ON_OFFICE_AUTOLOADER_DIR;
include TINY_PNG_AUTOLOADER_DIR;

//update images

$sdk_bilder_projekt = new onOfficeSDK();
$sdk_bilder_projekt->setApiVersion('stable');
$parameters_bilder_projekt = [
    'estateids' => [
        $project['id']
    ],

    'categories' => ['Titelbild', 'Foto', 'Foto_gross', 'Grundriss', 'Lageplan']
];

$handleReadProjektPics = $sdk_bilder_projekt->callGeneric(onOfficeSDK::ACTION_ID_GET, 'estatepictures', $parameters_bilder_projekt);
$sdk_bilder_projekt->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
$bilder_projekte = $sdk_bilder_projekt->getResponseArray($handleReadProjektPics);
$pic_arrays = $bilder_projekte['data']['records'];





if(!empty($pic_arrays)){

    $image_array1 = array();
    $image_array2 = array();
    $image_array_check= array();



    $i =0;
    foreach($pic_arrays as $pic_array){


        if(
            empty(get_post_meta($post_id, '_image_array_for_check',false)) ||
            !in_array($pic_array['id'],get_post_meta($post_id, '_image_array_for_check',true))

        ){
            \Tinify\setKey(get_option('tiny_png_api'));
            \Tinify\validate();
            mkdir(EUGEN_ONOFFICE_PLUGIN_DIR.'files/projects/images/'.$project['id'], 0777, true);
            $destdir = EUGEN_ONOFFICE_PLUGIN_DIR.'files/projects/images/'.$project['id'];
            $desturl = EUGEN_ONOFFICE_PLUGIN_URL.'files/projects/images/'.$project['id'];

            $image_url= $pic_array['elements'][0]['url'];
            $image_type = $pic_array['elements'][0]['type'];
            $image_file_name = $pic_array['id'].'.jpg';
            $source = \Tinify\fromUrl($image_url);
            $source->convert(array("type" => ["image/jpeg"]));

            $resized = $source->resize(array(
                "method" => "scale",
                "width" => 1920
            ));
            $resized->toFile($destdir.'/'.$image_file_name);

            $imageUrl_compressed = plugins_url( 'eugen-onoffice/files/projects/images/'.$project['id'].'/'.$image_file_name );

            $image_array1['type']=$pic_array['elements'][0]['type'];
            $image_array1['url']=$imageUrl_compressed;
            $image_array2[$i] = $image_array1;
            $image_array_check[] = $pic_array['id'];


        }
        else{


            $destdir = EUGEN_ONOFFICE_PLUGIN_DIR.'files/projects/images/'.$project['id'];
            $desturl = EUGEN_ONOFFICE_PLUGIN_URL.'files/projects/images/'.$project['id'];

            $image_url= $pic_array['elements'][0]['url'];
            $image_type = $pic_array['elements'][0]['type'];
            $image_file_name = $pic_array['id'].'.jpg';

            $imageUrl_compressed = plugins_url( 'eugen-onoffice/files/projects/images/'.$project['id'].'/'.$image_file_name );

            $image_array1['type']=$pic_array['elements'][0]['type'];
            $image_array1['url']=$imageUrl_compressed;
            $image_array2[$i] = $image_array1;
            $image_array_check[] = $pic_array['id'];



        }

        if($pic_array['elements'][0]['type'] == 'Titelbild'){


            $source = $pic_array['elements'][0]['url'];
            $target = $destdir.'/'.$pic_array['id'].'_thumb.jpg';
            $targetUrl = $desturl.'/'.$pic_array['id'].'_thumb.jpg';

            $config = (object) [
                'width'	=> 660,
                'height'	=> 440
            ];

            list($sourceWidth, $sourceHeight, $sourceType) = getimagesize($source);

            switch($sourceType) {

                case IMAGETYPE_JPEG:

                    $sourceImage = imagecreatefromjpeg($source);
                    break;

                case IMAGETYPE_PNG:
                    $sourceImage = imagecreatefrompng($source);
                    break;

                default:
                    return false;

            }

            $sourceAspect = $sourceWidth / $sourceHeight;
            $targetAspect = $config->width / $config->height;
            if($sourceAspect > $targetAspect) {
                $tempHeight = $config->height;
                $tempWidth = round($config->height * $sourceAspect);
            }
            else {
                $tempWidth = $config->width;
                $tempHeight = round($config->width / $sourceAspect);
            }

            $tempImage = imagecreatetruecolor($tempWidth, $tempHeight);
            imagecopyresampled($tempImage, $sourceImage, 0, 0, 0, 0, $tempWidth, $tempHeight, $sourceWidth, $sourceHeight);

            $x0 = ($tempWidth - $config->width) / 2;
            $y0 = ($tempHeight - $config->height) / 2;
            $targetImage = imagecreatetruecolor($config->width, $config->height);
            imagecopy($targetImage, $tempImage, 0, 0, $x0, $y0, $config->width, $config->height);

            imagejpeg($targetImage, $target, 85);

            $image_array1['type']='thumbnail';
            $image_array1['url']=$targetUrl;
            $image_array2[$i] = $image_array1;
            $i++;
            $image_array1['type'] =  $pic_array['elements'][0]['type'];
            $image_array1['url']  =  $imageUrl_compressed;
            $image_array2[$i]     =  $image_array1;

        }
        $i++;

    }

    update_post_meta($post_id, '_image_array', $image_array2);
    update_post_meta($post_id, '_image_array_for_check', $image_array_check);

}




/////////////////
