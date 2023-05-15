<?php

echo 'WP Querry all Projects Posts Deutsch';
//foreach Englisch Projekt
foreach($projects_english['data']['records'] as $project_english){

    $objekt_titel_englisch = (empty(wp_strip_all_tags( $project_english['elements']['objekttitel'] )) ? 'No Title': wp_strip_all_tags( $project_english['elements']['objekttitel'] ));
    $objekt_beschreibung_englisch = (empty(wp_strip_all_tags( $project_english['elements']['objektbeschreibung'] )) ? 'No Description': wp_strip_all_tags( $project_english['elements']['objektbeschreibung'] ));

        if(in_array($project_english['id'], $onOffice_projects_ID_array_english)){

            //get the Post_ID from onOffice_ID
            $current_project_postID =  array_search($project_english['id'],$onOffice_projects_ID_array_english,false);

            $custom_project_tax = array(
                'land' => $project_english['elements']['land']

            );
            $project = array(

                'ID'                    => $current_project_postID,
                'post_author'           => 1,
                'post_content'          => $objekt_beschreibung_englisch,
                'post_content_filtered' => '',
                'post_title'            => $objekt_titel_englisch,

                //  'tax_input'             => $custom_project_tax,

            );



            //Freiflächen
            update_post_meta($current_project_postID, '_terrasse', $project_english['elements']['ind_2366_Feld_ObjFlaeche129']);
            update_post_meta($current_project_postID, '_dachterrasse', $project_english['elements']['balkon_terrasse_flaeche']);
            update_post_meta($current_project_postID, '_balkon', $project_english['elements']['ind_2368_Feld_ObjFlaeche130']);
            update_post_meta($current_project_postID, '_garten', $project_english['elements']['gartenflaeche']);
            update_post_meta($current_project_postID, '_loggia', $project_english['elements']['ind_2504_Feld_ObjFlaeche156']);

            //Gesamtmiete
            update_post_meta($current_project_postID, '_wammiete', $project_english['elements']['warmmiete']);
            update_post_meta($current_project_postID, '_miete_von', $project_english['elements']['ind_2768_Feld_ObjPreise220']);
            update_post_meta($current_project_postID, '_miete_bis', $project_english['elements']['ind_2770_Feld_ObjPreise221']);



            //Wohnfläche
            update_post_meta($current_project_postID, '_wohnflaeche', $project_english['elements']['wohnflaeche']);

            //Objekt
            update_post_meta($current_project_postID, '_objekt_titel', $project_english['elements']['objekttitel']);
            update_post_meta($current_project_postID, '_strasse', $project_english['elements']['strasse']);
            update_post_meta($current_project_postID, '_hausnummer', $project_english['elements']['hausnummer']);
            update_post_meta($current_project_postID, '_plz', $project_english['elements']['plz']);
            update_post_meta($current_project_postID, '_ort', $project_english['elements']['ort']);
            update_post_meta($current_project_postID, '_tuernr', $project_english['elements']['tuernr']);
            update_post_meta($current_project_postID, '_etage', $project_english['elements']['etage']);

            //Zimmer
            update_post_meta($current_project_postID, '_anzahl_zimmer', $project_english['elements']['anzahl_zimmer']);
            update_post_meta($current_project_postID, '_anzahl_badezimmer', $project_english['elements']['anzahl_badezimmer']);
            update_post_meta($current_project_postID, '_anzahl_sep_wc', $project_english['elements']['anzahl_sep_wc']);
            update_post_meta($current_project_postID, '_anzahl_balkone', $project_english['elements']['anzahl_balkone']);
            update_post_meta($current_project_postID, '_flaeche_balkone', $project_english['elements']['ind_2366_Feld_ObjFlaeche129']);
            update_post_meta($current_project_postID, '_anzahl_terrassen', $project_english['elements']['anzahl_terrassen']);
            update_post_meta($current_project_postID, '_flaeche_terrassen', $project_english['elements']['balkon_terrasse_flaeche']);
            update_post_meta($current_project_postID, '_anzahl_logia', $project_english['elements']['anzahl_logia']);
            update_post_meta($current_project_postID, '_flaeche_logia', $project_english['elements']['ind_2368_Feld_ObjFlaeche130']);
            update_post_meta($current_project_postID, '_anzahl_dachterrasse', $project_english['elements']['ind_2372_Feld_ObjFlaeche132']);
            update_post_meta($current_project_postID, '_flaeche_dachterrasse', $project_english['elements']['ind_2504_Feld_ObjFlaeche156']);
            update_post_meta($current_project_postID, '_gartenflaeche', $project_english['elements']['gartenflaeche']);
            update_post_meta($current_project_postID, '_moebliert', $project_english['elements']['moebliert']);
            update_post_meta($current_project_postID, '_anzahl_stellplaetze', $project_english['elements']['anzahl_stellplaetze']);

            //Parkplätze
            update_post_meta($current_project_postID, '_multiParkingLot', $project_english['elements']['multiParkingLot']);
            update_post_meta($current_project_postID, '_multiParkingLot_carport', $project_english['elements']['multiParkingLot']['carport']);
            update_post_meta($current_project_postID, '_multiParkingLot_duplex', $project_english['elements']['multiParkingLot']['duplex']);
            update_post_meta($current_project_postID, '_multiParkingLot_parkingSpace', $project_english['elements']['multiParkingLot']['parkingSpace']);
            update_post_meta($current_project_postID, '_multiParkingLot_garage', $project_english['elements']['multiParkingLot']['garage']);
            update_post_meta($current_project_postID, '_multiParkingLot_multiStoryGarage', $project_english['elements']['multiParkingLot']['multiStoryGarage']);
            update_post_meta($current_project_postID, '_multiParkingLot_undergroundGarage', $project_english['elements']['multiParkingLot']['undergroundGarage']);
            update_post_meta($current_project_postID, '_multiParkingLot_otherParkingLot', $project_english['elements']['multiParkingLot']['otherParkingLot']);

            //Fahrstuhl
            update_post_meta($current_project_postID, '_fahrstuhl', $project_english['elements']['fahrstuhl']);
            update_post_meta($current_project_postID, '_kellerflaeche', $project_english['elements']['kellerflaeche']);
            update_post_meta($current_project_postID, '_barrierefrei', $project_english['elements']['barrierefrei']);
            update_post_meta($current_project_postID, '_max_mietdauer', $project_english['elements']['max_mietdauer']);
            update_post_meta($current_project_postID, '_betr_kosten_inkl_ust', $project_english['elements']['betr_kosten_inkl_ust']);
            update_post_meta($current_project_postID, '_kaution', $project_english['elements']['kaution']);
            update_post_meta($current_project_postID, '_aussen_courtage', $project_english['elements']['aussen_courtage']);
            update_post_meta($current_project_postID, '_provisionsfrei', $project_english['elements']['provisionsfrei']);

            update_post_meta($current_project_postID, '_ea_hwb_at', $project_english['elements']['ea_hwb_at']);
            update_post_meta($current_project_postID, '_ea_hwb_klasse_at', $project_english['elements']['ea_hwb_klasse_at']);

            update_post_meta($current_project_postID, '_baujahr', $project_english['elements']['baujahr']);
            update_post_meta($current_project_postID, '_heizungsart', $project_english['elements']['heizungsart']);
            update_post_meta($current_project_postID, '_befeuerung', $project_english['elements']['befeuerung']);

            update_post_meta($current_project_postID, '_mindest_haushaltseinkommen_netto', $project_english['elements']['ind_2774_Feld_ObjPreise223']);

            update_post_meta($current_project_postID, '_anbindung', $project_english['elements']['ind_2775_Feld_ObjInfra224']);
            update_post_meta($current_project_postID, '_objektnr_extern', $project_english['elements']['objektnr_extern']);

            update_post_meta($current_project_postID, '_objektbeschreibung', $project_english['elements']['objektbeschreibung']);
            update_post_meta($current_project_postID, '_lage', $project_english['elements']['lage']);
            update_post_meta($current_project_postID, '_ausstatt_beschr', $project_english['elements']['ausstatt_beschr']);
            update_post_meta($current_project_postID, '_sonstige_angaben', $project_english['elements']['sonstige_angaben']);
            update_post_meta($current_project_postID, '_angebot_auftragssituation', $project_english['elements']['ind_1840_Feld_ObjFreitexte15']);


            //Luxus
            update_post_meta($current_project_postID, '_klimatisiert', $project_english['elements']['klimatisiert']);
            update_post_meta($current_project_postID, '_wellnessbereich', $project_english['elements']['wellnessbereich']);
            update_post_meta($current_project_postID, '_abstellraum', $project_english['elements']['abstellraum']);
            update_post_meta($current_project_postID, '_fahrradraum', $project_english['elements']['fahrradraum']);
            update_post_meta($current_project_postID, '_swimmingpool', $project_english['elements']['swimmingpool']);
            update_post_meta($current_project_postID, '_videoueberwachung', $project_english['elements']['ind_2544_Feld_ObjAusstattung171']);
            update_post_meta($current_project_postID, '_videogegensprechanlage', $project_english['elements']['ind_2546_Feld_ObjAusstattung172']);
            update_post_meta($current_project_postID, '_kamin', $project_english['elements']['kamin']);
            update_post_meta($current_project_postID, '_jacuzzi', $project_english['elements']['ind_2540_Feld_ObjAusstattung169']);
            update_post_meta($current_project_postID, '_grillbereich', $project_english['elements']['ind_2552_Feld_ObjAusstattung175']);
            update_post_meta($current_project_postID, '_fitnessraum', $project_english['elements']['ind_2558_Feld_ObjAusstattung178']);
            update_post_meta($current_project_postID, '_smart_home_system', $project_english['elements']['ind_2560_Feld_ObjAusstattung179']);

            update_post_meta($current_project_postID, '_mietbelastuns_quote', $project_english['elements']['ind_3124_Feld_ObjPreise357']);


            update_post_meta($current_project_postID, '_barrierefrei', $project_english['elements']['barrierefrei']);
            update_post_meta($current_project_postID, '_verfuegbar_ab', $project_english['elements']['verfuegbar_ab']);
            update_post_meta($current_project_postID, '_mietbelastungsquote', $project_english['elements']['ind_3124_Feld_ObjPreise357']);

///hier weiter machen


            update_post_meta($current_project_postID, 'objekt_bild_url',  $bilder['data']['records'][0]['elements'][0]['url']);
            update_post_meta($current_project_postID, 'objekt_adresse', $project_english['elements']['strasse'] . ' ' .$project_english['elements']['hausnummer']);

            wp_update_post( $project );


            //Projekt Objekte holen
            $params = [
                'relationtype'	=> 'urn:onoffice-de-ns:smart:2.5:relationTypes:estate:estateUnit',
                'parentids'			=> [$project_english['id']]
            ];
            $handleProjId = $sdk->callGeneric(onOfficeSDK::ACTION_ID_GET, 'idsfromrelation', $params);
            $sdk->sendRequests('699ecf82c67d50866d526c80e7eb4698', '97da813ec50e73c330d006b2ced048df6ff5d2be6e8009d63109f7ac6b59a668');
            $project_objects  = $sdk->getResponseArray($handleProjId);

            $i= 0;
            foreach($project_objects['data']['records'][0]['elements'][$project_english['id']] as $items){

                update_post_meta($current_project_postID, 'projekt_objekt_'.$i, $items);
                $i++;
            }

        }
        //wenn Projekt nicht vorhanden erstellen
        //check if Version ist available english
        else{

            if( $project_english['elements']['language'] == 'ENG' ){

                $custom_tax = array(
                    'land' => $project_english['elements']['land']

                );

                $project = array(

                    'post_author'           => 1,
                    'post_content'          => $objekt_beschreibung_englisch,
                    'post_content_filtered' => '',
                    'post_title'            => $objekt_titel_englisch,
                    'post_excerpt'          => '',
                    'post_status'           => 'publish',
                    'post_type'             => 'projects_english',
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


                // Insert the post into the database
                $project_post_id = wp_insert_post( $project );

                if ($project_post_id) {
                    // insert post meta

                    add_post_meta($project_post_id, 'language', 'ENG');
                    //Objekt Infos
                    add_post_meta($project_post_id, 'ist_objekt', 0);
                    add_post_meta($project_post_id, 'hat_projekt', 1);
                    add_post_meta($project_post_id, 'language', 'ENG');

                    add_post_meta($project_post_id, '_uuid', $project_english['elements']['uuid']);
                    add_post_meta($project_post_id, '_id', $project_english['id']);


                    add_post_meta($project_post_id, 'objekt_bild_url',  $bilder['data']['records'][0]['elements'][0]['url']);
                    add_post_meta($project_post_id, 'objekt_titel', $project_english['elements']['objekttitel']);
                    add_post_meta($project_post_id, 'objekt_adresse', $project_english['elements']['strasse'] . ' ' .$project_english['elements']['hausnummer']);

                    //Freiflächen
                    add_post_meta($project_post_id, '_terrasse', $project_english['elements']['ind_2366_Feld_ObjFlaeche129']);
                    add_post_meta($project_post_id, '_dachterrasse', $project_english['elements']['balkon_terrasse_flaeche']);
                    add_post_meta($project_post_id, '_balkon', $project_english['elements']['ind_2368_Feld_ObjFlaeche130']);
                    add_post_meta($project_post_id, '_garten', $project_english['elements']['gartenflaeche']);
                    add_post_meta($project_post_id, '_loggia', $project_english['elements']['ind_2504_Feld_ObjFlaeche156']);

                    //Gesamtmiete
                    add_post_meta($project_post_id, '_wammiete', $project_english['elements']['warmmiete']);
                    add_post_meta($project_post_id, '_miete_von', $project_english['elements']['ind_2768_Feld_ObjPreise220']);
                    add_post_meta($project_post_id, '_miete_bis', $project_english['elements']['ind_2770_Feld_ObjPreise221']);



                    //Wohnfläche
                    add_post_meta($project_post_id, '_wohnflaeche', $project_english['elements']['wohnflaeche']);

                    //Objekt
                    add_post_meta($project_post_id, '_objekt_titel', $project_english['elements']['objekttitel']);
                    add_post_meta($project_post_id, '_strasse', $project_english['elements']['strasse']);
                    add_post_meta($project_post_id, '_hausnummer', $project_english['elements']['hausnummer']);
                    add_post_meta($project_post_id, '_plz', $project_english['elements']['plz']);
                    add_post_meta($project_post_id, '_ort', $project_english['elements']['ort']);
                    add_post_meta($project_post_id, '_tuernr', $project_english['elements']['tuernr']);
                    add_post_meta($project_post_id, '_etage', $project_english['elements']['etage']);

                    //Zimmer
                    add_post_meta($project_post_id, '_anzahl_zimmer', $project_english['elements']['anzahl_zimmer']);
                    add_post_meta($project_post_id, '_anzahl_badezimmer', $project_english['elements']['anzahl_badezimmer']);
                    add_post_meta($project_post_id, '_anzahl_sep_wc', $project_english['elements']['anzahl_sep_wc']);
                    add_post_meta($project_post_id, '_anzahl_balkone', $project_english['elements']['anzahl_balkone']);
                    add_post_meta($project_post_id, '_flaeche_balkone', $project_english['elements']['ind_2366_Feld_ObjFlaeche129']);
                    add_post_meta($project_post_id, '_anzahl_terrassen', $project_english['elements']['anzahl_terrassen']);
                    add_post_meta($project_post_id, '_flaeche_terrassen', $project_english['elements']['balkon_terrasse_flaeche']);
                    add_post_meta($project_post_id, '_anzahl_logia', $project_english['elements']['anzahl_logia']);
                    add_post_meta($project_post_id, '_flaeche_logia', $project_english['elements']['ind_2368_Feld_ObjFlaeche130']);
                    add_post_meta($project_post_id, '_anzahl_dachterrasse', $project_english['elements']['ind_2372_Feld_ObjFlaeche132']);
                    add_post_meta($project_post_id, '_flaeche_dachterrasse', $project_english['elements']['ind_2504_Feld_ObjFlaeche156']);
                    add_post_meta($project_post_id, '_gartenflaeche', $project_english['elements']['gartenflaeche']);
                    add_post_meta($project_post_id, '_moebliert', $project_english['elements']['moebliert']);
                    add_post_meta($project_post_id, '_anzahl_stellplaetze', $project_english['elements']['anzahl_stellplaetze']);

                    //Parkplätze
                    add_post_meta($project_post_id, '_multiParkingLot', $project_english['elements']['multiParkingLot']);
                    add_post_meta($project_post_id, '_multiParkingLot_carport', $project_english['elements']['multiParkingLot']['carport']);
                    add_post_meta($project_post_id, '_multiParkingLot_duplex', $project_english['elements']['multiParkingLot']['duplex']);
                    add_post_meta($project_post_id, '_multiParkingLot_parkingSpace', $project_english['elements']['multiParkingLot']['parkingSpace']);
                    add_post_meta($project_post_id, '_multiParkingLot_garage', $project_english['elements']['multiParkingLot']['garage']);
                    add_post_meta($project_post_id, '_multiParkingLot_multiStoryGarage', $project_english['elements']['multiParkingLot']['multiStoryGarage']);
                    add_post_meta($project_post_id, '_multiParkingLot_undergroundGarage', $project_english['elements']['multiParkingLot']['undergroundGarage']);
                    add_post_meta($project_post_id, '_multiParkingLot_otherParkingLot', $project_english['elements']['multiParkingLot']['otherParkingLot']);

                    //Fahrstuhl
                    add_post_meta($project_post_id, '_fahrstuhl', $project_english['elements']['fahrstuhl']);
                    add_post_meta($project_post_id, '_kellerflaeche', $project_english['elements']['kellerflaeche']);
                    add_post_meta($project_post_id, '_barrierefrei', $project_english['elements']['barrierefrei']);
                    add_post_meta($project_post_id, '_max_mietdauer', $project_english['elements']['max_mietdauer']);
                    add_post_meta($project_post_id, '_betr_kosten_inkl_ust', $project_english['elements']['betr_kosten_inkl_ust']);
                    add_post_meta($project_post_id, '_kaution', $project_english['elements']['kaution']);
                    add_post_meta($project_post_id, '_aussen_courtage', $project_english['elements']['aussen_courtage']);
                    add_post_meta($project_post_id, '_provisionsfrei', $project_english['elements']['provisionsfrei']);

                    add_post_meta($project_post_id, '_ea_hwb_at', $project_english['elements']['ea_hwb_at']);
                    add_post_meta($project_post_id, '_ea_hwb_klasse_at', $project_english['elements']['ea_hwb_klasse_at']);

                    add_post_meta($project_post_id, '_baujahr', $project_english['elements']['baujahr']);
                    add_post_meta($project_post_id, '_heizungsart', $project_english['elements']['heizungsart']);
                    add_post_meta($project_post_id, '_befeuerung', $project_english['elements']['befeuerung']);

                    add_post_meta($project_post_id, '_mindest_haushaltseinkommen_netto', $project_english['elements']['ind_2774_Feld_ObjPreise223']);

                    add_post_meta($project_post_id, '_anbindung', $project_english['elements']['ind_2775_Feld_ObjInfra224']);
                    add_post_meta($project_post_id, '_objektnr_extern', $project_english['elements']['objektnr_extern']);

                    add_post_meta($project_post_id, '_objektbeschreibung', $project_english['elements']['objektbeschreibung']);
                    add_post_meta($project_post_id, '_lage', $project_english['elements']['lage']);
                    add_post_meta($project_post_id, '_ausstatt_beschr', $project_english['elements']['ausstatt_beschr']);
                    add_post_meta($project_post_id, '_sonstige_angaben', $project_english['elements']['sonstige_angaben']);
                    add_post_meta($project_post_id, '_angebot_auftragssituation', $project_english['elements']['ind_1840_Feld_ObjFreitexte15']);


                    //Luxus
                    add_post_meta($project_post_id, '_klimatisiert', $project_english['elements']['klimatisiert']);
                    add_post_meta($project_post_id, '_wellnessbereich', $project_english['elements']['wellnessbereich']);
                    add_post_meta($project_post_id, '_abstellraum', $project_english['elements']['abstellraum']);
                    add_post_meta($project_post_id, '_fahrradraum', $project_english['elements']['fahrradraum']);
                    add_post_meta($project_post_id, '_swimmingpool', $project_english['elements']['swimmingpool']);
                    add_post_meta($project_post_id, '_videoueberwachung', $project_english['elements']['ind_2544_Feld_ObjAusstattung171']);
                    add_post_meta($project_post_id, '_videogegensprechanlage', $project_english['elements']['ind_2546_Feld_ObjAusstattung172']);
                    add_post_meta($project_post_id, '_kamin', $project_english['elements']['kamin']);
                    add_post_meta($project_post_id, '_jacuzzi', $project_english['elements']['ind_2540_Feld_ObjAusstattung169']);
                    add_post_meta($project_post_id, '_grillbereich', $project_english['elements']['ind_2552_Feld_ObjAusstattung175']);
                    add_post_meta($project_post_id, '_fitnessraum', $project_english['elements']['ind_2558_Feld_ObjAusstattung178']);
                    add_post_meta($project_post_id, '_smart_home_system', $project_english['elements']['ind_2560_Feld_ObjAusstattung179']);

                    add_post_meta($project_post_id, '_mietbelastuns_quote', $project_english['elements']['ind_3124_Feld_ObjPreise357']);


                    add_post_meta($project_post_id, '_barrierefrei', $project_english['elements']['barrierefrei']);
                    add_post_meta($project_post_id, '_verfuegbar_ab', $project_english['elements']['verfuegbar_ab']);
                    add_post_meta($project_post_id, '_mietbelastungsquote', $project_english['elements']['ind_3124_Feld_ObjPreise357']);

///hier weiter machen


                    add_post_meta($project_post_id, 'objekt_bild_url',  $bilder['data']['records'][0]['elements'][0]['url']);
                    add_post_meta($project_post_id, 'objekt_adresse', $project_english['elements']['strasse'] . ' ' .$project_english['elements']['hausnummer']);



                    //Projekt Objekte holen
                    $params = [
                        'relationtype'	=> 'urn:onoffice-de-ns:smart:2.5:relationTypes:estate:estateUnit',
                        'parentids'			=> [$project_english['id']]
                    ];
                    $handleProjId = $sdk->callGeneric(onOfficeSDK::ACTION_ID_GET, 'idsfromrelation', $params);
                    $sdk->sendRequests('699ecf82c67d50866d526c80e7eb4698', '97da813ec50e73c330d006b2ced048df6ff5d2be6e8009d63109f7ac6b59a668');
                    $project_objects  = $sdk->getResponseArray($handleProjId);

                    $i= 0;
                    foreach($project_objects['data']['records'][0]['elements'][$project_english['id']] as $items){

                        add_post_meta($project_post_id, 'projekt_objekt_'.$i, $items);
                        $i++;
                    }



                }

            }

        }


}//end Foreach Projekte Englisch