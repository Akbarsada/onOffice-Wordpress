<?php
use onOffice\SDK\onOfficeSDK;
include ON_OFFICE_AUTOLOADER_DIR;
foreach($projects['data']['records'] as $project){

    $project_titel = (empty(wp_strip_all_tags( $project['elements']['objekttitel'] )) ? 'Immobilie hat keinen Titel': wp_strip_all_tags( $project['elements']['objekttitel'] ));
    $project_desc = (empty(wp_strip_all_tags( $project['elements']['objektbeschreibung'] )) ? 'Immobilie hat keine Beschreibung': wp_strip_all_tags( $project['elements']['objektbeschreibung'] ));

                //ob Projekt vorhanden
                if(in_array($project['id'], $projectsID_array)){
                    $post_id =  array_search($project['id'],$projectsID_array,false);

                    //get Estates from Projects
                    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/get_estates.php';
                    //request projectsPictures onOffice
                    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/projectsPicturesRequest.php';
                    //request estatesDocumentRequest onOffice
                    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/projectsDocumentRequest.php';

                    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/update_project_meta.php';

                    wp_update_post( $project_post );

                }
                //wenn Projekt nicht vorhanden erstellen
                //check if Version ist available english
                else {
    
                    $custom_tax = array(
                        'land' => $project['elements']['land'],
                        'stadt' => $project['elements']['ort'],
                        'district' => $project['elements']['ort'],
                        'miete' => $project['elements']['warmmiete'],
                        'flaeche' => $project['elements']['wohnflaeche'],
                        'anzahl_zimmer' => $project['elements']['anzahl_zimmer'],
                        'balkon' => $project['elements']['anzahl_balkone'],
                        'terrasse' => $project['elements']['anzahl_terrassen'],
                        'garten' => $project['elements']['ort'],
                        'aufzug' => $project['elements']['ort'],
                        'barrierefrei' => $project['elements']['barrierefrei'],
                        'keller' => $project['elements']['kellerflaeche'],
                        'moebeliert' => $project['elements']['moebliert'],
                        'parkplatz' => $project['elements']['multiParkingLot']['undergroundGarage'],
                        'seniorengerecht' => $project['elements']['ort'],
                        'erstbezug' => $project['elements']['ort'],
                        'neuwertig' => $project['elements']['ort'],
                        'saniert' => $project['elements']['ort'],
    
                    );
                    $project_post = array(
    
                        'post_author' => 1,
                        'post_content' => $project_desc,
                        'post_content_filtered' => '',
                        'post_title' => $project_titel,
                        'post_excerpt' => '',
                        'post_status' => 'publish',
                        'post_type' => 'projects',

                       // 'tax_input' => $custom_tax,
    
                    );
                    //insert Post
                    $post_id = wp_insert_post($project_post);

                    if ($post_id) {
                        //request projectsPictures onOffice
                        require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/projectsPicturesRequest.php';
                        //request estatesDocumentRequest onOffice
                        require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/projectsDocumentRequest.php';
                        require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/update_project_meta.php';


                        //get Estates from Projects
                        require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/get_estates.php';


    
                    }
    
    
                }

        }