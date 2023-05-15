<?php




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
    'tax_input'             => $custom_tax,


);

//Picture
//update_post_meta($post_id, '_image_array', $picture_array_dim1);



update_post_meta($post_id, '_uuid', $estate['elements']['uuid']);
update_post_meta($post_id, '_id', $estate['id']);
//Objekt Infos
update_post_meta($post_id, 'ist_objekt', 1);
update_post_meta($post_id, 'hat_projekt', 0);
update_post_meta($post_id, 'language', 'DE');

update_post_meta($post_id, '_erstellt_am', $estate['elements']['erstellt_am']);

///update_post_meta($post_id, 'objekt_bild_url',  $bilder['data']['records'][0]['elements'][0]['url']);
update_post_meta($post_id, 'objekt_titel', $estate['elements']['objekttitel']);
update_post_meta($post_id, 'objekt_adresse', $estate['elements']['strasse'] . ' ' .$estate['elements']['hausnummer']);


//Freiflächen
update_post_meta($post_id, '_terrasse', $estate['elements']['ind_2366_Feld_ObjFlaeche129']);
update_post_meta($post_id, '_dachterrasse', $estate['elements']['balkon_terrasse_flaeche']);
update_post_meta($post_id, '_balkon', $estate['elements']['ind_2368_Feld_ObjFlaeche130']);
update_post_meta($post_id, '_garten', $estate['elements']['gartenflaeche']);
update_post_meta($post_id, '_loggia', $estate['elements']['ind_2504_Feld_ObjFlaeche156']);

//Gesamtmiete
update_post_meta($post_id, '_wammiete', $estate['elements']['warmmiete']);
update_post_meta($post_id, '_miete_von', $estate['elements']['ind_2768_Feld_ObjPreise220']);
update_post_meta($post_id, '_miete_bis', $estate['elements']['ind_2770_Feld_ObjPreise221']);



//Wohnfläche
update_post_meta($post_id, '_wohnflaeche', $estate['elements']['wohnflaeche']);

//Objekt
update_post_meta($post_id, '_objekt_titel', $estate['elements']['objekttitel']);
update_post_meta($post_id, '_strasse', $estate['elements']['strasse']);
update_post_meta($post_id, '_hausnummer', $estate['elements']['hausnummer']);
update_post_meta($post_id, '_plz', $estate['elements']['plz']);
update_post_meta($post_id, '_ort', $estate['elements']['ort']);
update_post_meta($post_id, '_tuernr', $estate['elements']['tuernr']);
update_post_meta($post_id, '_etage', $estate['elements']['etage']);

//Zimmer
update_post_meta($post_id, '_anzahl_zimmer', $estate['elements']['anzahl_zimmer']);
update_post_meta($post_id, '_anzahl_badezimmer', $estate['elements']['anzahl_badezimmer']);
update_post_meta($post_id, '_anzahl_sep_wc', $estate['elements']['anzahl_sep_wc']);
update_post_meta($post_id, '_anzahl_balkone', $estate['elements']['anzahl_balkone']);
update_post_meta($post_id, '_flaeche_balkone', $estate['elements']['ind_2366_Feld_ObjFlaeche129']);
update_post_meta($post_id, '_anzahl_terrassen', $estate['elements']['anzahl_terrassen']);
update_post_meta($post_id, '_flaeche_terrassen', $estate['elements']['balkon_terrasse_flaeche']);
update_post_meta($post_id, '_anzahl_logia', $estate['elements']['anzahl_logia']);
update_post_meta($post_id, '_flaeche_logia', $estate['elements']['ind_2368_Feld_ObjFlaeche130']);
update_post_meta($post_id, '_anzahl_dachterrasse', $estate['elements']['ind_2372_Feld_ObjFlaeche132']);
update_post_meta($post_id, '_flaeche_dachterrasse', $estate['elements']['ind_2504_Feld_ObjFlaeche156']);
update_post_meta($post_id, '_gartenflaeche', $estate['elements']['gartenflaeche']);
update_post_meta($post_id, '_moebliert', $estate['elements']['moebliert']);
update_post_meta($post_id, '_anzahl_stellplaetze', $estate['elements']['anzahl_stellplaetze']);

//Parkplätze
update_post_meta($post_id, '_multiParkingLot', $estate['elements']['multiParkingLot']);
update_post_meta($post_id, '_multiParkingLot_carport', $estate['elements']['multiParkingLot']['carport']);
update_post_meta($post_id, '_multiParkingLot_duplex', $estate['elements']['multiParkingLot']['duplex']);
update_post_meta($post_id, '_multiParkingLot_parkingSpace', $estate['elements']['multiParkingLot']['parkingSpace']);
update_post_meta($post_id, '_multiParkingLot_garage', $estate['elements']['multiParkingLot']['garage']);
update_post_meta($post_id, '_multiParkingLot_multiStoryGarage', $estate['elements']['multiParkingLot']['multiStoryGarage']);
update_post_meta($post_id, '_multiParkingLot_undergroundGarage', $estate['elements']['multiParkingLot']['undergroundGarage']);
update_post_meta($post_id, '_multiParkingLot_otherParkingLot', $estate['elements']['multiParkingLot']['otherParkingLot']);

//Fahrstuhl
update_post_meta($post_id, '_fahrstuhl', $estate['elements']['fahrstuhl']);
update_post_meta($post_id, '_kellerflaeche', $estate['elements']['kellerflaeche']);
update_post_meta($post_id, '_barrierefrei', $estate['elements']['barrierefrei']);
update_post_meta($post_id, '_max_mietdauer', $estate['elements']['max_mietdauer']);
update_post_meta($post_id, '_betr_kosten_inkl_ust', $estate['elements']['betr_kosten_inkl_ust']);
update_post_meta($post_id, '_kaution', $estate['elements']['kaution']);
update_post_meta($post_id, '_aussen_courtage', $estate['elements']['aussen_courtage']);
update_post_meta($post_id, '_provisionsfrei', $estate['elements']['provisionsfrei']);

update_post_meta($post_id, '_ea_hwb_at', $estate['elements']['ea_hwb_at']);
update_post_meta($post_id, '_ea_hwb_klasse_at', $estate['elements']['ea_hwb_klasse_at']);

update_post_meta($post_id, '_baujahr', $estate['elements']['baujahr']);
update_post_meta($post_id, '_heizungsart', $estate['elements']['heizungsart']);
update_post_meta($post_id, '_befeuerung', $estate['elements']['befeuerung']);

update_post_meta($post_id, '_mindest_haushaltseinkommen_netto', $estate['elements']['ind_2774_Feld_ObjPreise223']);

update_post_meta($post_id, '_anbindung', $estate['elements']['ind_2775_Feld_ObjInfra224']);
update_post_meta($post_id, '_objektnr_extern', $estate['elements']['objektnr_extern']);

update_post_meta($post_id, '_objektbeschreibung', $estate['elements']['objektbeschreibung']);
update_post_meta($post_id, '_lage', $estate['elements']['lage']);
update_post_meta($post_id, '_ausstatt_beschr', $estate['elements']['ausstatt_beschr']);
update_post_meta($post_id, '_sonstige_angaben', $estate['elements']['sonstige_angaben']);
update_post_meta($post_id, '_angebot_auftragssituation', $estate['elements']['ind_1840_Feld_ObjFreitexte15']);


//Luxus
update_post_meta($post_id, '_klimatisiert', $estate['elements']['klimatisiert']);
update_post_meta($post_id, '_wellnessbereich', $estate['elements']['wellnessbereich']);
update_post_meta($post_id, '_abstellraum', $estate['elements']['abstellraum']);
update_post_meta($post_id, '_fahrradraum', $estate['elements']['fahrradraum']);
update_post_meta($post_id, '_swimmingpool', $estate['elements']['swimmingpool']);
update_post_meta($post_id, '_videoueberwachung', $estate['elements']['ind_2544_Feld_ObjAusstattung171']);
update_post_meta($post_id, '_videogegensprechanlage', $estate['elements']['ind_2546_Feld_ObjAusstattung172']);
update_post_meta($post_id, '_kamin', $estate['elements']['kamin']);
update_post_meta($post_id, '_jacuzzi', $estate['elements']['ind_2540_Feld_ObjAusstattung169']);
update_post_meta($post_id, '_grillbereich', $estate['elements']['ind_2552_Feld_ObjAusstattung175']);
update_post_meta($post_id, '_fitnessraum', $estate['elements']['ind_2558_Feld_ObjAusstattung178']);
update_post_meta($post_id, '_smart_home_system', $estate['elements']['ind_2560_Feld_ObjAusstattung179']);

update_post_meta($post_id, '_mietbelastuns_quote', $estate['elements']['ind_3124_Feld_ObjPreise357']);


update_post_meta($post_id, '_barrierefrei', $estate['elements']['barrierefrei']);
update_post_meta($post_id, '_verfuegbar_ab', $estate['elements']['verfuegbar_ab']);
update_post_meta($post_id, '_mietbelastungsquote', $estate['elements']['ind_3124_Feld_ObjPreise357']);

///hier weiter machen


//update_post_meta($post_id, 'objekt_bild_url',  $bilder['data']['records'][0]['elements'][0]['url']);
update_post_meta($post_id, 'objekt_adresse', $estate['elements']['strasse'] . ' ' .$estate['elements']['hausnummer']);