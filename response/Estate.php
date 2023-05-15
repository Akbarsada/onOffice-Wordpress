<?php
	
	class Estate {
		
		protected $id;
	
    public function __construct($id) {
			$this->id = $id;
    }
		
		public function exists() {
			if(!get_post($this->id)) {
				return false;
			}
			
			return true;
		}

    public function  estate_data() {
      $object_data = array();
			
      $object_data['objekt_bild_url'] = get_post_meta($this->id, 'objekt_bild_url', true);
      $object_data['objekt_titel'] = get_post_meta($this->id, 'objekt_titel', true);
      $object_data['objekt_adresse'] = get_post_meta($this->id, 'objekt_adresse', true);
      $object_data['_uuid'] =  get_post_meta($this->id, '_uuid', true);
      $object_data['_id'] =  get_post_meta($this->id, '_id', true);

      $object_data['_lage'] =  get_post_meta($this->id, '_lage', true);
      $object_data['_betr_kosten_inkl_ust'] =  get_post_meta($this->id, '_betr_kosten_inkl_ust', true);
      $object_data['_plz'] =  get_post_meta($this->id, '_plz', true);
      $object_data['_strasse'] =  get_post_meta($this->id, '_strasse', true);
      $object_data['_hausnummer'] =  get_post_meta($this->id, '_hausnummer', true);
      $object_data['_ort'] =  get_post_meta($this->id, '_ort', true);
      $object_data['_land'] =  get_post_meta($this->id, '_land', true);
      $object_data['_etage'] =  get_post_meta($this->id, '_etage', true);
      $object_data['_wohnflaeche'] =  get_post_meta($this->id, '_wohnflaeche', true);
      $object_data['_anzahl_zimmer'] =  get_post_meta($this->id, '_anzahl_zimmer', true);
      $object_data['_anzahl_badezimmer'] =  get_post_meta($this->id, '_anzahl_badezimmer', true);
      $object_data['_balkon_terrasse_flaeche'] =  get_post_meta($this->id, '_balkon_terrasse_flaeche', true);
      $object_data['_anzahl_stellplaetze'] =  get_post_meta($this->id, '_anzahl_stellplaetze', true);
      $object_data['_anzahl_sep_wc'] =  get_post_meta($this->id, '_anzahl_sep_wc', true);
      $object_data['_anzahl_balkone'] =  get_post_meta($this->id, '_anzahl_balkone', true);
      $object_data['_anzahl_terrassen'] =  get_post_meta($this->id, '_anzahl_terrassen', true);
      $object_data['_anzahl_logia'] =  get_post_meta($this->id, '_anzahl_logia', true);
      $object_data['_moebliert'] =  get_post_meta($this->id, '_moebliert', true);
			
      //Parkplätze Spezialfälle
      $multiParkingLot = get_post_meta($this->id, '_multiParkingLot', true);
			
      //Carport
	  $hat_carport = $multiParkingLot['carport']['Count'] > 0;
      $object_data['hat_carport'] = $hat_carport;
      $object_data['anzahl_carport'] = $multiParkingLot['carport']['Count'];
      $object_data['preis_carport'] = $multiParkingLot['carport']['Price'];

      //Duplex
      $hat_dublex = $multiParkingLot['duplex']['Count'] > 0;
      $object_data['hat_dublex'] = $hat_dublex;
      $object_data['anzahl_dublex'] = $multiParkingLot['duplex']['Count'];
      $object_data['preis_dublex'] = $multiParkingLot['duplex']['Price'];

      //Parkplatz
      $hat_parkingSpace = $multiParkingLot['parkingSpace']['Count'] > 0;
      $object_data['hat_parkingSpace'] = $hat_parkingSpace;
      $object_data['anzahl_parkingSpace'] = $multiParkingLot['parkingSpace']['Count'];
      $object_data['preis_parkingSpace'] = $multiParkingLot['parkingSpace']['Price'];

      //Garage
      $hat_garage = $multiParkingLot['garage']['Count'] > 0;
      $object_data['hat_garage'] = $hat_garage;
      $object_data['anzahl_garage'] = $multiParkingLot['garage']['Count'];
      $object_data['preis_garage'] = $multiParkingLot['garage']['Price'];

      //multiStoryGarage
      $hat_multiStoryGarage = $multiParkingLot['multiStoryGarage']['Count'] > 0;
      $object_data['hat_multiStoryGarage'] = $hat_multiStoryGarage;
      $object_data['anzahl_multiStoryGarage'] = $multiParkingLot['multiStoryGarage']['Count'];
      $object_data['preis_multiStoryGarage'] = $multiParkingLot['multiStoryGarage']['Price'];

      //undergroundGarage
      $hat_undergroundGarage = $multiParkingLot['undergroundGarage']['Count'] > 0;
      $object_data['hat_undergroundGarage'] = $hat_undergroundGarage;
      $object_data['anzahl_undergroundGarage'] = $multiParkingLot['undergroundGarage']['Count'];
      $object_data['preis_undergroundGarage'] = $multiParkingLot['undergroundGarage']['Price'];

      //otherParkingLot
      $hat_otherParkingLot = $multiParkingLot['otherParkingLot']['Count'] > 0;
      $object_data['hat_otherParkingLot'] = $hat_otherParkingLot;
      $object_data['anzahl_otherParkingLot'] = $multiParkingLot['otherParkingLot']['Count'];
      $object_data['preis_otherParkingLot'] = $multiParkingLot['otherParkingLot']['Price'];
			
      //hat Parkmöglichkeit
      if($multiParkingLot['otherParkingLot']['Count'] +
        $multiParkingLot['undergroundGarage']['Count'] +
        $multiParkingLot['multiStoryGarage']['Count'] +
        $multiParkingLot['garage']['Count'] +
        $multiParkingLot['parkingSpace']['Count'] +
        $multiParkingLot['duplex']['Count'] +
        $multiParkingLot['carport']['Count'] > 0) {
				$hat_parkmoeglichkeit = 1;
			}
      else {
				$hat_parkmoeglichkeit = 0;
			}
      $object_data['hat_parkmoeglichkeit'] = $hat_parkmoeglichkeit;
			
      //Fahrstuhl
      $fahrstuhl = get_post_meta($this->id, '_fahrstuhl', true);
      $hatFahrstuhl = !empty($fahrstuhl);
      $object_data['hat_fahrstuhl'] = $hatFahrstuhl;
			
      $object_data['_kellerflaeche'] =  get_post_meta($this->id, '_kellerflaeche', true);
      $object_data['_barrierefrei'] =  get_post_meta($this->id, '_barrierefrei', true);
      $object_data['_verfuegbar_ab'] =  get_post_meta($this->id, '_verfuegbar_ab', true);
      $object_data['_aussen_courtage'] =  get_post_meta($this->id, '_aussen_courtage', true);
      $object_data['_provisionsfrei'] =  get_post_meta($this->id, '_provisionsfrei', true);
      $object_data['_ea_hwb_at'] =  get_post_meta($this->id, '_ea_hwb_at', true);
      $object_data['_objektnr_extern'] =  get_post_meta($this->id, '_objektnr_extern', true);
      $object_data['_ausstatt_beschr'] =  get_post_meta($this->id, '_ausstatt_beschr', true);
      $object_data['_sonstige_angaben'] =  get_post_meta($this->id, '_sonstige_angaben', true);
      $object_data['_klimatisiert'] =  get_post_meta($this->id, '_klimatisiert', true);
      $object_data['_wellnessbereich'] =  get_post_meta($this->id, '_wellnessbereich', true);
      $object_data['_abstellraum'] =  get_post_meta($this->id, '_abstellraum', true);
      $object_data['_fahrradraum'] =  get_post_meta($this->id, '_fahrradraum', true);
      $object_data['_swimmingpool'] =  get_post_meta($this->id, '_swimmingpool', true);
      $object_data['_warmmiete'] =  get_post_meta($this->id, '_wammiete', true);
      $object_data['_mietbelastuns_quote'] =  get_post_meta($this->id, '_mietbelastuns_quote', true);
      $object_data['_terrasse'] =  get_post_meta($this->id, '_terrasse', true);
      $object_data['_dachterrasse'] =  get_post_meta($this->id, '_dachterrasse', true);
      $object_data['_balkon'] =  get_post_meta($this->id, '_balkon', true);
      $object_data['_garten'] =  get_post_meta($this->id, '_garten', true);
      $object_data['_loggia'] =  get_post_meta($this->id, '_loggia', true);
      $object_data['_miete_von'] =  get_post_meta($this->id, '_miete_von', true);
      $object_data['_miete_bis'] =  get_post_meta($this->id, '_miete_bis', true);
      $object_data['_tuernr'] =  get_post_meta($this->id, '_tuernr', true);
      $object_data['_flaeche_balkone'] =  get_post_meta($this->id, '_flaeche_balkone', true);
      $object_data['_flaeche_terrassen'] =  get_post_meta($this->id, '_flaeche_terrassen', true);
      $object_data['_flaeche_logia'] =  get_post_meta($this->id, '_flaeche_logia', true);
      $object_data['_anzahl_dachterrasse'] =  get_post_meta($this->id, '_anzahl_dachterrasse', true);
      $object_data['_flaeche_dachterrasse'] =  get_post_meta($this->id, '_flaeche_dachterrasse', true);
      $object_data['_gartenflaeche'] =  get_post_meta($this->id, '_gartenflaeche', true);
      $object_data['_max_mietdauer'] =  get_post_meta($this->id, '_max_mietdauer', true);
      $object_data['_kaution'] =  get_post_meta($this->id, '_kaution', true);
      $object_data['_ea_hwb_klasse_at'] =  get_post_meta($this->id, '_ea_hwb_klasse_at', true);
      $object_data['_baujahr'] =  get_post_meta($this->id, '_baujahr', true);
      $object_data['_heizungsart'] =  get_post_meta($this->id, '_heizungsart', true);
      $object_data['_befeuerung'] =  get_post_meta($this->id, '_befeuerung', true);
      $object_data['_mindest_haushaltseinkommen_netto'] =  get_post_meta($this->id, '_mindest_haushaltseinkommen_netto', true);
      $object_data['_objektbeschreibung'] =  get_post_meta($this->id, '_objektbeschreibung', true);
      $object_data['_mietbelastuns_quote'] =  get_post_meta($this->id, '_mietbelastuns_quote', true);
      $object_data['_angebot_auftragssituation'] =  get_post_meta($this->id, '_angebot_auftragssituation', true);
      $object_data['_videoueberwachung'] =  get_post_meta($this->id, '_videoueberwachung', true);
      $object_data['_videogegensprechanlage'] =  get_post_meta($this->id, '_videogegensprechanlage', true);
      $object_data['_jacuzzi'] =  get_post_meta($this->id, '_jacuzzi', true);
      $object_data['_grillbereich'] =  get_post_meta($this->id, '_grillbereich', true);
      $object_data['_fitnessraum'] =  get_post_meta($this->id, '_fitnessraum', true);
      $object_data['_smart_home_system'] =  get_post_meta($this->id, '_smart_home_system', true);
      $object_data['_barrierefrei'] =  get_post_meta($this->id, '_barrierefrei', true);
			
      $object_data['_anbindung'] =  get_post_meta($this->id, '_anbindung', true);

      $object_data['_image_array'] =  get_post_meta($this->id, '_image_array', true);
      $object_data['_document_array'] =  get_post_meta($this->id, '_document_array', true);

        $object_data['_erstellt_am'] = get_post_meta( get_the_ID(), '_erstellt_am', true );
        $object_data['_erstellt_am_timestamp'] = strtotime($object_data['_erstellt_am']);

        $object_data['slug'] = $this->getSlug();
			
      return $object_data;
    }
		
		
		public function getSlug() {
			$post = get_post($this->id);
			return $post->post_name . '-' . $post->ID;
		}


    public function getParent() {
			$projectId = get_post_meta($this->id, '_from_project', true);
			
			if(!$projectId) {
				return false;
			}
			
			$project = new Project($projectId);
			return $project->project_data();
    }
		
}
