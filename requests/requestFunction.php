<?php
use onOffice\SDK\onOfficeSDK;

function onOfficeRequest_cb(){
    ini_set('max_execution_time', '3600');
    //include vendor
    include ON_OFFICE_AUTOLOADER_DIR;

    //enable Wordpress Database
    global $wp;

    //create request object
    $sdk = new onOfficeSDK();
    $sdk->setApiVersion('stable');

    //Estate German
    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/estatesRequest_param_de.php';
    $handleReadEstate = $sdk->callGeneric(onOfficeSDK::ACTION_ID_READ, 'estate', $parametersReadEstate);
    $sdk->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
    $estates = $sdk->getResponseArray($handleReadEstate);
    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/estatesWP_querry_de.php';
    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/estatesWP_loop_de.php';

    //Estate English
    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/estatesRequest_param_en.php';
    $handleReadEstate = $sdk->callGeneric(onOfficeSDK::ACTION_ID_READ, 'estate', $parametersReadEstate);
    $sdk->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
    $estates_en = $sdk->getResponseArray($handleReadEstate);
    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/estatesWP_querry_en.php';
    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/estate/estatesWP_loop_en.php';

    //Project German
    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/projectsRequest_param_de.php';
    $handleReadProject = $sdk->callGeneric(onOfficeSDK::ACTION_ID_READ, 'estate', $parametersReadProjects);
    $sdk->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
    $projects = $sdk->getResponseArray($handleReadProject);
    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/projectsWP_querry_de.php';
    require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/projectsWP_loop_de.php';

    /*   //Project English
       require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/projectsRequest_param_en.php';
       $handleReadProject = $sdk->callGeneric(onOfficeSDK::ACTION_ID_READ, 'estate', $parametersReadProject);
       $sdk->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
       $projects_en = $sdk->getResponseArray($handleReadProject);
       require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/projectsWP_querry_en.php';
       require EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/project/projectsWP_loop_en.php';*/
    
		// sitemaps
		require_once EUGEN_ONOFFICE_PLUGIN_DIR . 'backend/sitemap/create-sitemap.php';
		createSitemaps();
		
    return true;
//    wp_die();
}
add_action('wp_ajax_onOfficeRequest_cb', 'onOfficeRequest_cb');
