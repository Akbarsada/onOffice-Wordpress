<?php
$parametersReadProject = [
    'addMainLangId' => true,
    'addestatelanguage' => true,
    'estatelanguage' =>  'ENG',
    'data' => [
        'ind_2830_Feld_ObjTech251',//_ist_veroeffentlicht
        'objektnr_extern',//_objektnr_extern
        'land',
        'uuid',
        'Id',
        'stammobjekt',
        'erstellt_am',
        'ind_3124_Feld_ObjPreise357', //_mietbelastungsquote
        'ind_2366_Feld_ObjFlaeche129', //_terrasse
        'balkon_terrasse_flaeche', //_dachterrasse
        'ind_2368_Feld_ObjFlaeche130', //_balkon
        'gartenflaeche', //_garten
        'ind_2504_Feld_ObjFlaeche156', //_loggia
        'warmmiete', //_wammiete
        'ind_2768_Feld_ObjPreise220', //_miete_von
        'ind_2770_Feld_ObjPreise221', //_miete_bis
        'wohnflaeche', //_wohnflaeche
        'objekttitel', //_objekt_titel
        'strasse', //_strasse
        'hausnummer', //_hausnummer
        'plz', //_plz
        'ort', //_ort
        'tuernr', //_tuernr
        'etage', //_etage
        'anzahl_zimmer', //_anzahl_zimmer
        'anzahl_badezimmer', //_anzahl_badezimmer
        'anzahl_sep_wc', //_anzahl_sep_wc
        'anzahl_balkone', //_anzahl_balkone
        'ind_2366_Feld_ObjFlaeche129', //_flaeche_balkone
        'anzahl_terrassen', //_anzahl_terrassen
        'balkon_terrasse_flaeche', //_flaeche_terrassen
        'anzahl_logia', //_anzahl_logia
        'ind_2368_Feld_ObjFlaeche130', //_flaeche_logia
        'ind_2372_Feld_ObjFlaeche132', //_anzahl_dachterrasse
        'ind_2504_Feld_ObjFlaeche156', //_flaeche_dachterrasse
        'gartenflaeche', //_gartenflaeche
        'moebliert', //_moebliert
        'anzahl_stellplaetze', //_anzahl_stellplaetze
        'multiParkingLot', //_multiParkingLot
        'fahrstuhl', //_fahrstuhl
        'kellerflaeche', //_kellerflaeche
        'barrierefrei', //_barrierefrei
        'max_mietdauer', //_max_mietdauer
        'betr_kosten_inkl_ust', //_betr_kosten_inkl_ust
        'kaution', //_kaution
        'aussen_courtage', //_aussen_courtage
        'provisionsfrei', //_provisionsfrei
        'ea_hwb_at', //_ea_hwb_at
        'ea_hwb_klasse_at', //_ea_hwb_klasse_at
        'baujahr', //_baujahr
        'heizungsart', //_heizungsart
        'befeuerung', //_befeuerung
        'ind_2774_Feld_ObjPreise223', //_mindest_haushaltseinkommen_netto
        'ind_2775_Feld_ObjInfra224', //_dachterrasse
        'objektnr_extern', //_anbindung
        'objektbeschreibung', //_objektbeschreibung
        'lage', //_lage
        'ausstatt_beschr', //_ausstatt_beschr
        'sonstige_angaben', //_sonstige_angaben
        'ind_1840_Feld_ObjFreitexte15', //_angebot_auftragssituation
        'klimatisiert', //_klimatisiert
        'wellnessbereich', //_wellnessbereich
        'abstellraum', //_abstellraum
        'fahrradraum', //_fahrradraum
        'swimmingpool', //_swimmingpool
        'ind_2544_Feld_ObjAusstattung171', //_videoueberwachung
        'ind_2546_Feld_ObjAusstattung172', //_videogegensprechanlage
        'kamin', //_kamin
        'ind_2540_Feld_ObjAusstattung169', //_jacuzzi
        'ind_2552_Feld_ObjAusstattung175', //_grillbereich
        'ind_2558_Feld_ObjAusstattung178', //_fitnessraum
        'ind_2560_Feld_ObjAusstattung179', //_smart_home_system
        'ind_3124_Feld_ObjPreise357', //_mietbelastuns_quote
        'barrierefrei', //_barrierefrei
        'verfuegbar_ab', //_verfuegbar_ab


    ],
    'listlimit' => get_option( 'onOffice_anzahl_objekte'),

    'filter' => [
         'ind_2830_Feld_ObjTech251' => [
             ['op' => '=', 'val' => 1],
         ],
        'stammobjekt' => [
            ['op' => '=', 'val' => 1],
        ],


    ],
];

