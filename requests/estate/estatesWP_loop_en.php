<?php
foreach($estates_en['data']['records'] as $estate_en){
$estate_titel = (empty(wp_strip_all_tags( $estate_en['elements']['objekttitel'] )) ? 'estatebilie hat keinen Titel': wp_strip_all_tags( $estate_en['elements']['objekttitel'] ));
$estate_desc = (empty(wp_strip_all_tags( $estate_en['elements']['objektbeschreibung'] )) ? 'estatebilie hat keine Beschreibung': wp_strip_all_tags( $estate_en['elements']['objektbeschreibung'] ));


        if( in_array($estate_en['id'], $estateID_array_en)){

            $post_id =  array_search($estate_en['id'],$estateID_array_en,false);

            require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/update_estate_meta_en.php';
            wp_update_post( $estate_post );

        }

        else{
                if( $estate_en['elements']['language'] == 'ENG' ){

                    $custom_tax = array(
                        'land' => $estate_en['elements']['land'],
                        'stadt' => $estate_en['elements']['ort'],
                        'district' => $estate_en['elements']['ort'],
                        'miete' => $estate_en['elements']['warmmiete'],
                        'flaeche' => $estate_en['elements']['wohnflaeche'],
                        'anzahl_zimmer' => $estate_en['elements']['anzahl_zimmer'],
                        'balkon' => $estate_en['elements']['anzahl_balkone'],
                        'terrasse' => $estate_en['elements']['anzahl_terrassen'],
                        'garten' => $estate_en['elements']['ort'],
                        'aufzug' => $estate_en['elements']['ort'],
                        'barrierefrei' => $estate_en['elements']['barrierefrei'],
                        'keller' => $estate_en['elements']['kellerflaeche'],
                        'moebeliert' => $estate_en['elements']['moebliert'],
                        'parkplatz' => $estate_en['elements']['multiParkingLot']['undergroundGarage'],
                        'seniorengerecht' => $estate_en['elements']['ort'],
                        'erstbezug' => $estate_en['elements']['ort'],
                        'neuwertig' => $estate_en['elements']['ort'],
                        'saniert' => $estate_en['elements']['ort'],

                    );
                    $estate_post = array(

                        'post_author'           => 1,
                        'post_content'          => $estate_desc,
                        'post_content_filtered' => '',
                        'post_title'            => $estate_titel,
                        'post_excerpt'          => '',
                        'post_status'           => 'publish',
                        'post_type'             => 'estates_en',
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

                    //Wenn Post erstellt wurde
                    if ($post_id) {
                        require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/update_estate_meta_en.php';
                    }

                }
        }
}
    