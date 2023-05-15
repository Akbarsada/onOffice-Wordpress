<?php
use onOffice\SDK\onOfficeSDK;
include ON_OFFICE_AUTOLOADER_DIR;



$paramsProjId = [
    'relationtype' => 'urn:onoffice-de-ns:smart:2.5:relationTypes:estate:estateUnit',
    'parentids' => [$project['id']]
];
$handleProjId = $sdk->callGeneric(onOfficeSDK::ACTION_ID_GET, 'idsfromrelation', $paramsProjId);
$sdk->sendRequests(get_option('onOffice_token'), get_option('onOffice_secret'));
$project_objects = $sdk->getResponseArray($handleProjId);

$i = 0;
foreach ($project_objects['data']['records'][0]['elements'][$project['id']] as $onOfficeEstateID) {
    update_post_meta($post_id, 'projekt_objekt_' . $i, $onOfficeEstateID);

//get Estate Post ID from Project

    // WP_Query arguments
    $args = array (
        'post_type'              => array( 'estates' ),
        'post_status'            => array( 'publish' ),
        'meta_query'             => array(
            array(
                'key'       => '_id',
                'value'     => $onOfficeEstateID,
            ),
        ),
    );

// The Query
    $query = new WP_Query( $args );

// The Loop
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            update_post_meta(get_the_ID(), '_from_project' , $post_id);
        }
    }

// Restore original Post Data
    wp_reset_postdata();






    $i++;
}

if($i > 0){
    update_post_meta($post_id, 'anzahl_objekte', $i);
    update_post_meta($post_id, 'hat_objekte', 1);
}
else{
    update_post_meta($post_id, 'anzahl_objekte', 0);
    update_post_meta($post_id, 'hat_objekte', 0);
}