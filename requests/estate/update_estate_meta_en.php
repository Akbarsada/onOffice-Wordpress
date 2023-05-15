<?php

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


);

//Picture
//update_post_meta($post_id, '_image_array', $picture_array_dim1);



update_post_meta($post_id, '_uuid', $estate_en['elements']['uuid']);
update_post_meta($post_id, '_id', $estate_en['id']);
//Objekt Infos
update_post_meta($post_id, 'ist_objekt', 1);
update_post_meta($post_id, 'hat_projekt', 0);
update_post_meta($post_id, 'language', 'DE');

///update_post_meta($post_id, 'objekt_bild_url',  $bilder['data']['records'][0]['elements'][0]['url']);
update_post_meta($post_id, 'objekt_titel', $estate_en['elements']['objekttitel']);
update_post_meta($post_id, 'objekt_adresse', $estate_en['elements']['strasse'] . ' ' .$estate_en['elements']['hausnummer']);


//Freiflächen
update_post_meta($post_id, '_terrasse', $estate_en['elements']['ind_2366_Feld_ObjFlaeche129']);
update_post_meta($post_id, '_dachterrasse', $estate_en['elements']['balkon_terrasse_flaeche']);
update_post_meta($post_id, '_balkon', $estate_en['elements']['ind_2368_Feld_ObjFlaeche130']);
update_post_meta($post_id, '_garten', $estate_en['elements']['gartenflaeche']);
update_post_meta($post_id, '_loggia', $estate_en['elements']['ind_2504_Feld_ObjFlaeche156']);

//Gesamtmiete
update_post_meta($post_id, '_wammiete', $estate_en['elements']['warmmiete']);
update_post_meta($post_id, '_miete_von', $estate_en['elements']['ind_2768_Feld_ObjPreise220']);
update_post_meta($post_id, '_miete_bis', $estate_en['elements']['ind_2770_Feld_ObjPreise221']);



//Wohnfläche
update_post_meta($post_id, '_wohnflaeche', $estate_en['elements']['wohnflaeche']);

//Objekt
update_post_meta($post_id, '_objekt_titel', $estate_en['elements']['objekttitel']);
update_post_meta($post_id, '_strasse', $estate_en['elements']['strasse']);
update_post_meta($post_id, '_hausnummer', $estate_en['elements']['hausnummer']);
update_post_meta($post_id, '_plz', $estate_en['elements']['plz']);
update_post_meta($post_id, '_ort', $estate_en['elements']['ort']);
update_post_meta($post_id, '_tuernr', $estate_en['elements']['tuernr']);
update_post_meta($post_id, '_etage', $estate_en['elements']['etage']);

//Zimmer
update_post_meta($post_id, '_anzahl_zimmer', $estate_en['elements']['anzahl_zimmer']);
update_post_meta($post_id, '_anzahl_badezimmer', $estate_en['elements']['anzahl_badezimmer']);
update_post_meta($post_id, '_anzahl_sep_wc', $estate_en['elements']['anzahl_sep_wc']);
update_post_meta($post_id, '_anzahl_balkone', $estate_en['elements']['anzahl_balkone']);
update_post_meta($post_id, '_flaeche_balkone', $estate_en['elements']['ind_2366_Feld_ObjFlaeche129']);
update_post_meta($post_id, '_anzahl_terrassen', $estate_en['elements']['anzahl_terrassen']);
update_post_meta($post_id, '_flaeche_terrassen', $estate_en['elements']['balkon_terrasse_flaeche']);
update_post_meta($post_id, '_anzahl_logia', $estate_en['elements']['anzahl_logia']);
update_post_meta($post_id, '_flaeche_logia', $estate_en['elements']['ind_2368_Feld_ObjFlaeche130']);
update_post_meta($post_id, '_anzahl_dachterrasse', $estate_en['elements']['ind_2372_Feld_ObjFlaeche132']);
update_post_meta($post_id, '_flaeche_dachterrasse', $estate_en['elements']['ind_2504_Feld_ObjFlaeche156']);
update_post_meta($post_id, '_gartenflaeche', $estate_en['elements']['gartenflaeche']);
update_post_meta($post_id, '_moebliert', $estate_en['elements']['moebliert']);
update_post_meta($post_id, '_anzahl_stellplaetze', $estate_en['elements']['anzahl_stellplaetze']);

//Parkplätze
update_post_meta($post_id, '_multiParkingLot', $estate_en['elements']['multiParkingLot']);
update_post_meta($post_id, '_multiParkingLot_carport', $estate_en['elements']['multiParkingLot']['carport']);
update_post_meta($post_id, '_multiParkingLot_duplex', $estate_en['elements']['multiParkingLot']['duplex']);
update_post_meta($post_id, '_multiParkingLot_parkingSpace', $estate_en['elements']['multiParkingLot']['parkingSpace']);
update_post_meta($post_id, '_multiParkingLot_garage', $estate_en['elements']['multiParkingLot']['garage']);
update_post_meta($post_id, '_multiParkingLot_multiStoryGarage', $estate_en['elements']['multiParkingLot']['multiStoryGarage']);
update_post_meta($post_id, '_multiParkingLot_undergroundGarage', $estate_en['elements']['multiParkingLot']['undergroundGarage']);
update_post_meta($post_id, '_multiParkingLot_otherParkingLot', $estate_en['elements']['multiParkingLot']['otherParkingLot']);

//Fahrstuhl
update_post_meta($post_id, '_fahrstuhl', $estate_en['elements']['fahrstuhl']);
update_post_meta($post_id, '_kellerflaeche', $estate_en['elements']['kellerflaeche']);
update_post_meta($post_id, '_barrierefrei', $estate_en['elements']['barrierefrei']);
update_post_meta($post_id, '_max_mietdauer', $estate_en['elements']['max_mietdauer']);
update_post_meta($post_id, '_betr_kosten_inkl_ust', $estate_en['elements']['betr_kosten_inkl_ust']);
update_post_meta($post_id, '_kaution', $estate_en['elements']['kaution']);
update_post_meta($post_id, '_aussen_courtage', $estate_en['elements']['aussen_courtage']);
update_post_meta($post_id, '_provisionsfrei', $estate_en['elements']['provisionsfrei']);

update_post_meta($post_id, '_ea_hwb_at', $estate_en['elements']['ea_hwb_at']);
update_post_meta($post_id, '_ea_hwb_klasse_at', $estate_en['elements']['ea_hwb_klasse_at']);

update_post_meta($post_id, '_baujahr', $estate_en['elements']['baujahr']);
update_post_meta($post_id, '_heizungsart', $estate_en['elements']['heizungsart']);
update_post_meta($post_id, '_befeuerung', $estate_en['elements']['befeuerung']);

update_post_meta($post_id, '_mindest_haushaltseinkommen_netto', $estate_en['elements']['ind_2774_Feld_ObjPreise223']);

update_post_meta($post_id, '_anbindung', $estate_en['elements']['ind_2775_Feld_ObjInfra224']);
update_post_meta($post_id, '_objektnr_extern', $estate_en['elements']['objektnr_extern']);

update_post_meta($post_id, '_objektbeschreibung', $estate_en['elements']['objektbeschreibung']);
update_post_meta($post_id, '_lage', $estate_en['elements']['lage']);
update_post_meta($post_id, '_ausstatt_beschr', $estate_en['elements']['ausstatt_beschr']);
update_post_meta($post_id, '_sonstige_angaben', $estate_en['elements']['sonstige_angaben']);
update_post_meta($post_id, '_angebot_auftragssituation', $estate_en['elements']['ind_1840_Feld_ObjFreitexte15']);


//Luxus
update_post_meta($post_id, '_klimatisiert', $estate_en['elements']['klimatisiert']);
update_post_meta($post_id, '_wellnessbereich', $estate_en['elements']['wellnessbereich']);
update_post_meta($post_id, '_abstellraum', $estate_en['elements']['abstellraum']);
update_post_meta($post_id, '_fahrradraum', $estate_en['elements']['fahrradraum']);
update_post_meta($post_id, '_swimmingpool', $estate_en['elements']['swimmingpool']);
update_post_meta($post_id, '_videoueberwachung', $estate_en['elements']['ind_2544_Feld_ObjAusstattung171']);
update_post_meta($post_id, '_videogegensprechanlage', $estate_en['elements']['ind_2546_Feld_ObjAusstattung172']);
update_post_meta($post_id, '_kamin', $estate_en['elements']['kamin']);
update_post_meta($post_id, '_jacuzzi', $estate_en['elements']['ind_2540_Feld_ObjAusstattung169']);
update_post_meta($post_id, '_grillbereich', $estate_en['elements']['ind_2552_Feld_ObjAusstattung175']);
update_post_meta($post_id, '_fitnessraum', $estate_en['elements']['ind_2558_Feld_ObjAusstattung178']);
update_post_meta($post_id, '_smart_home_system', $estate_en['elements']['ind_2560_Feld_ObjAusstattung179']);

update_post_meta($post_id, '_mietbelastuns_quote', $estate_en['elements']['ind_3124_Feld_ObjPreise357']);


update_post_meta($post_id, '_barrierefrei', $estate_en['elements']['barrierefrei']);
update_post_meta($post_id, '_verfuegbar_ab', $estate_en['elements']['verfuegbar_ab']);
update_post_meta($post_id, '_mietbelastungsquote', $estate_en['elements']['ind_3124_Feld_ObjPreise357']);

///hier weiter machen


//update_post_meta($post_id, 'objekt_bild_url',  $bilder['data']['records'][0]['elements'][0]['url']);
update_post_meta($post_id, 'objekt_adresse', $estate_en['elements']['strasse'] . ' ' .$estate_en['elements']['hausnummer']);