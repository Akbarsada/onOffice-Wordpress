<?php





$project_post = array(

    'post_author'           => 1,
    'post_content'          => $project_desc,

    'post_title'            => $project_titel,


);






update_post_meta($post_id, '_uuid', $project['elements']['uuid']);
update_post_meta($post_id, '_id', $project['id']);
//Objekt Infos
update_post_meta($post_id, 'ist_objekt', 1);
update_post_meta($post_id, 'hat_projekt', 0);
update_post_meta($post_id, 'language', 'DE');

update_post_meta($post_id, '_erstellt_am', $project['elements']['erstellt_am']);

///update_post_meta($post_id, 'objekt_bild_url',  $bilder['data']['records'][0]['elements'][0]['url']);
update_post_meta($post_id, 'objekt_titel', $project['elements']['objekttitel']);
update_post_meta($post_id, 'objekt_adresse', $project['elements']['strasse'] . ' ' .$project['elements']['hausnummer']);


//Freiflächen
update_post_meta($post_id, '_terrasse', $project['elements']['ind_2366_Feld_ObjFlaeche129']);
update_post_meta($post_id, '_dachterrasse', $project['elements']['balkon_terrasse_flaeche']);
update_post_meta($post_id, '_balkon', $project['elements']['ind_2368_Feld_ObjFlaeche130']);
update_post_meta($post_id, '_garten', $project['elements']['gartenflaeche']);
update_post_meta($post_id, '_loggia', $project['elements']['ind_2504_Feld_ObjFlaeche156']);

//Gesamtmiete
update_post_meta($post_id, '_wammiete', $project['elements']['warmmiete']);
update_post_meta($post_id, '_miete_von', $project['elements']['ind_2768_Feld_ObjPreise220']);
update_post_meta($post_id, '_miete_bis', $project['elements']['ind_2770_Feld_ObjPreise221']);



//Wohnfläche
update_post_meta($post_id, '_wohnflaeche', $project['elements']['wohnflaeche']);

//Objekt
update_post_meta($post_id, '_objekt_titel', $project['elements']['objekttitel']);
update_post_meta($post_id, '_strasse', $project['elements']['strasse']);
update_post_meta($post_id, '_hausnummer', $project['elements']['hausnummer']);
update_post_meta($post_id, '_plz', $project['elements']['plz']);
update_post_meta($post_id, '_ort', $project['elements']['ort']);
update_post_meta($post_id, '_tuernr', $project['elements']['tuernr']);
update_post_meta($post_id, '_etage', $project['elements']['etage']);

//Zimmer
update_post_meta($post_id, '_anzahl_zimmer', $project['elements']['anzahl_zimmer']);
update_post_meta($post_id, '_anzahl_badezimmer', $project['elements']['anzahl_badezimmer']);
update_post_meta($post_id, '_anzahl_sep_wc', $project['elements']['anzahl_sep_wc']);
update_post_meta($post_id, '_anzahl_balkone', $project['elements']['anzahl_balkone']);
update_post_meta($post_id, '_flaeche_balkone', $project['elements']['ind_2366_Feld_ObjFlaeche129']);
update_post_meta($post_id, '_anzahl_terrassen', $project['elements']['anzahl_terrassen']);
update_post_meta($post_id, '_flaeche_terrassen', $project['elements']['balkon_terrasse_flaeche']);
update_post_meta($post_id, '_anzahl_logia', $project['elements']['anzahl_logia']);
update_post_meta($post_id, '_flaeche_logia', $project['elements']['ind_2368_Feld_ObjFlaeche130']);
update_post_meta($post_id, '_anzahl_dachterrasse', $project['elements']['ind_2372_Feld_ObjFlaeche132']);
update_post_meta($post_id, '_flaeche_dachterrasse', $project['elements']['ind_2504_Feld_ObjFlaeche156']);
update_post_meta($post_id, '_gartenflaeche', $project['elements']['gartenflaeche']);
update_post_meta($post_id, '_moebliert', $project['elements']['moebliert']);
update_post_meta($post_id, '_anzahl_stellplaetze', $project['elements']['anzahl_stellplaetze']);

//Parkplätze
update_post_meta($post_id, '_multiParkingLot', $project['elements']['multiParkingLot']);
update_post_meta($post_id, '_multiParkingLot_carport', $project['elements']['multiParkingLot']['carport']);
update_post_meta($post_id, '_multiParkingLot_duplex', $project['elements']['multiParkingLot']['duplex']);
update_post_meta($post_id, '_multiParkingLot_parkingSpace', $project['elements']['multiParkingLot']['parkingSpace']);
update_post_meta($post_id, '_multiParkingLot_garage', $project['elements']['multiParkingLot']['garage']);
update_post_meta($post_id, '_multiParkingLot_multiStoryGarage', $project['elements']['multiParkingLot']['multiStoryGarage']);
update_post_meta($post_id, '_multiParkingLot_undergroundGarage', $project['elements']['multiParkingLot']['undergroundGarage']);
update_post_meta($post_id, '_multiParkingLot_otherParkingLot', $project['elements']['multiParkingLot']['otherParkingLot']);

//Fahrstuhl
update_post_meta($post_id, '_fahrstuhl', $project['elements']['fahrstuhl']);
update_post_meta($post_id, '_kellerflaeche', $project['elements']['kellerflaeche']);
update_post_meta($post_id, '_barrierefrei', $project['elements']['barrierefrei']);
update_post_meta($post_id, '_max_mietdauer', $project['elements']['max_mietdauer']);
update_post_meta($post_id, '_betr_kosten_inkl_ust', $project['elements']['betr_kosten_inkl_ust']);
update_post_meta($post_id, '_kaution', $project['elements']['kaution']);
update_post_meta($post_id, '_aussen_courtage', $project['elements']['aussen_courtage']);
update_post_meta($post_id, '_provisionsfrei', $project['elements']['provisionsfrei']);

update_post_meta($post_id, '_ea_hwb_at', $project['elements']['ea_hwb_at']);
update_post_meta($post_id, '_ea_hwb_klasse_at', $project['elements']['ea_hwb_klasse_at']);

update_post_meta($post_id, '_baujahr', $project['elements']['baujahr']);
update_post_meta($post_id, '_heizungsart', $project['elements']['heizungsart']);
update_post_meta($post_id, '_befeuerung', $project['elements']['befeuerung']);

update_post_meta($post_id, '_mindest_haushaltseinkommen_netto', $project['elements']['ind_2774_Feld_ObjPreise223']);

update_post_meta($post_id, '_anbindung', $project['elements']['ind_2775_Feld_ObjInfra224']);
update_post_meta($post_id, '_objektnr_extern', $project['elements']['objektnr_extern']);

update_post_meta($post_id, '_objektbeschreibung', $project['elements']['objektbeschreibung']);
update_post_meta($post_id, '_lage', $project['elements']['lage']);
update_post_meta($post_id, '_ausstatt_beschr', $project['elements']['ausstatt_beschr']);
update_post_meta($post_id, '_sonstige_angaben', $project['elements']['sonstige_angaben']);
update_post_meta($post_id, '_angebot_auftragssituation', $project['elements']['ind_1840_Feld_ObjFreitexte15']);


//Luxus
update_post_meta($post_id, '_klimatisiert', $project['elements']['klimatisiert']);
update_post_meta($post_id, '_wellnessbereich', $project['elements']['wellnessbereich']);
update_post_meta($post_id, '_abstellraum', $project['elements']['abstellraum']);
update_post_meta($post_id, '_fahrradraum', $project['elements']['fahrradraum']);
update_post_meta($post_id, '_swimmingpool', $project['elements']['swimmingpool']);
update_post_meta($post_id, '_videoueberwachung', $project['elements']['ind_2544_Feld_ObjAusstattung171']);
update_post_meta($post_id, '_videogegensprechanlage', $project['elements']['ind_2546_Feld_ObjAusstattung172']);
update_post_meta($post_id, '_kamin', $project['elements']['kamin']);
update_post_meta($post_id, '_jacuzzi', $project['elements']['ind_2540_Feld_ObjAusstattung169']);
update_post_meta($post_id, '_grillbereich', $project['elements']['ind_2552_Feld_ObjAusstattung175']);
update_post_meta($post_id, '_fitnessraum', $project['elements']['ind_2558_Feld_ObjAusstattung178']);
update_post_meta($post_id, '_smart_home_system', $project['elements']['ind_2560_Feld_ObjAusstattung179']);

update_post_meta($post_id, '_mietbelastuns_quote', $project['elements']['ind_3124_Feld_ObjPreise357']);


update_post_meta($post_id, '_barrierefrei', $project['elements']['barrierefrei']);
update_post_meta($post_id, '_verfuegbar_ab', $project['elements']['verfuegbar_ab']);
update_post_meta($post_id, '_mietbelastungsquote', $project['elements']['ind_3124_Feld_ObjPreise357']);

///hier weiter machen


//update_post_meta($post_id, 'objekt_bild_url',  $bilder['data']['records'][0]['elements'][0]['url']);
update_post_meta($post_id, 'objekt_adresse', $project['elements']['strasse'] . ' ' .$project['elements']['hausnummer']);
