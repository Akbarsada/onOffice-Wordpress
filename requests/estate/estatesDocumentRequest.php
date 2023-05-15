<?php
use onOffice\SDK\onOfficeSDK;
include ON_OFFICE_AUTOLOADER_DIR;



$sdk_doc = new onOfficeSDK();
$sdk_doc->setApiVersion('stable');

$parametersFiles = [

    'estateid' => $estate['id'],
    'fileid'   => null,
    'listlimit'  => 100,
    'showispublishedonhomepage'  => true,

];

$handleEstateFiles = $sdk_doc->call(onOfficeSDK::ACTION_ID_GET, 'estate', '', 'file', $parametersFiles);
$sdk_doc->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
$responseFiles = $sdk_doc->getResponseArray($handleEstateFiles);

$doc_array1 = array();
$doc_array2 = array();
$doc_array_check= array();

$documentAttributeArray = ['ind_Schl_3431', 'ind_Schl_3433', ];


$i =0;
foreach($responseFiles['data']['records'] as $document){


    if(
        empty(get_post_meta($post_id, '_document_for_check',false)) ||
        !in_array($document['id'],get_post_meta($post_id, '_document_for_check',true))
    ){

        if (in_array($document['elements']['documentAttribute'], $documentAttributeArray)) {

            $params_documents = [
                'estateid' => $estate['id'],
                'fileid' => $document['id'],
                'listlimit' => 100,
                'showispublishedonhomepage' => true
            ];


            $handle = $sdk_doc->call(onOfficeSDK::ACTION_ID_GET, 'estate', '', 'file', $params_documents);
            $sdk_doc->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
            $fileResponse = $sdk_doc->getResponseArray($handle);

            if(!empty($fileResponse['data']['records'][0]['elements']['content'])){

                $pdf = base64_decode($fileResponse['data']['records'][0]['elements']['content']);
                mkdir(EUGEN_ONOFFICE_PLUGIN_DIR.'files/estates/documents/'.$estate['id'], 0777, true);
                $docdir = EUGEN_ONOFFICE_PLUGIN_DIR.'files/estates/documents/'.$estate['id'];
                file_put_contents($docdir.'/'.$document['id']. '.pdf', $pdf);
                $doc_array1['type']=$document['elements']['type'];
                $doc_array1['url']= EUGEN_ONOFFICE_PLUGIN_URL.'files/estates/documents/'.$estate['id'].'/'.$document['id']. '.pdf';
                $doc_array2[$i] = $doc_array1;
                $doc_array_check[] = $document['id'];
                $i++;

            }

        }

    }
    else{


        $handle = $sdk_doc->call(onOfficeSDK::ACTION_ID_GET, 'estate', '', 'file', $params_documents);
        $sdk_doc->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
        $fileResponse = $sdk_doc->getResponseArray($handle);
        if(!empty($fileResponse['data']['records'][0]['elements']['content'])){

            $pdf = base64_decode($fileResponse['data']['records'][0]['elements']['content']);
            mkdir(EUGEN_ONOFFICE_PLUGIN_DIR.'files/estates/documents/'.$estate['id'], 0777, true);
            $docdir = EUGEN_ONOFFICE_PLUGIN_DIR.'files/estates/documents/'.$estate['id'];
            file_put_contents($docdir.'/'.$document['id']. '.pdf', $pdf);
            $doc_array1['type']=$document['elements']['type'];
            $doc_array1['url']= EUGEN_ONOFFICE_PLUGIN_URL.'files/estates/documents/'.$estate['id'].'/'.$document['id']. '.pdf';
            $doc_array2[$i] = $doc_array1;
            $doc_array_check[] = $document['id'];
            $i++;

        }

    }





}

update_post_meta($post_id, '_document_array', $doc_array2);
update_post_meta($post_id, '_document_for_check', $doc_array_check);