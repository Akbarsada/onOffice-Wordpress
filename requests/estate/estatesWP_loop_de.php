<?php
use onOffice\SDK\onOfficeSDK;
include ON_OFFICE_AUTOLOADER_DIR;
foreach($estates['data']['records'] as $estate){
    
    $estate_titel = (empty(wp_strip_all_tags( $estate['elements']['objekttitel'] )) ? 'Immobilie hat keinen Titel': wp_strip_all_tags( $estate['elements']['objekttitel'] ));
    $estate_desc = (empty(wp_strip_all_tags( $estate['elements']['objektbeschreibung'] )) ? 'Immobilie hat keine Beschreibung': wp_strip_all_tags( $estate['elements']['objektbeschreibung'] ));

   // $estate_titel = 'gohpedar';


    if( in_array($estate['id'], $estateID_array)){

        $post_id =  array_search($estate['id'],$estateID_array,false);

        //request estatesPicturesRequest onOffice
        require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/estatesPicturesRequest.php';
        //request estatesDocumentRequest onOffice
        require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/estatesDocumentRequest.php';
        //UPDATE POST
        require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/update_estate_meta.php';
        wp_update_post( $estate_post );
            
    }
    else{

        $custom_tax = array(
            'land' => $estate['elements']['land'],
            'stadt' => $estate['elements']['ort'],
            'district' => $estate['elements']['ort'],
            'miete' => $estate['elements']['warmmiete'],
            'flaeche' => $estate['elements']['wohnflaeche'],
            'anzahl_zimmer' => $estate['elements']['anzahl_zimmer'],
            'balkon' => $estate['elements']['anzahl_balkone'],
            'terrasse' => $estate['elements']['anzahl_terrassen'],
            'garten' => $estate['elements']['ort'],
            'aufzug' => $estate['elements']['ort'],
            'barrierefrei' => $estate['elements']['barrierefrei'],
            'keller' => $estate['elements']['kellerflaeche'],
            'moebeliert' => $estate['elements']['moebliert'],
            'parkplatz' => $estate['elements']['multiParkingLot']['undergroundGarage'],
            'seniorengerecht' => $estate['elements']['ort'],
            'erstbezug' => $estate['elements']['ort'],
            'neuwertig' => $estate['elements']['ort'],
            'saniert' => $estate['elements']['ort'],

        );
        $estate_post = array(

            'post_author'           => 1,
            'post_content'          => $estate_desc,
            'post_content_filtered' => '',
            'post_title'            => $estate_titel,
            'post_excerpt'          => '',
            'post_status'           => 'publish',
            'post_type'             => 'estates',
            'comment_status'        => 'closed',
            'ping_status'           => 'closed',
            'post_password'         => '',
            'to_ping'               => '',
            'pinged'                => '',
            'post_parent'           => 0,
            'menu_order'            => 0,
            'guid'                  => '',
            'context'               => '',
            'post_date'             => '',
            'post_date_gmt'         => '',
            'tax_input'             => $custom_tax,

        );
        $post_id = wp_insert_post( $estate_post );

        if ($post_id) {
        //add PostMeta
        require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/update_estate_meta.php';
        //request projectsPictures onOffice
        require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/estatesPicturesRequest.php';
        //request estatesDocumentRequest onOffice
        require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/estatesDocumentRequest.php';

        }

    }
    
}