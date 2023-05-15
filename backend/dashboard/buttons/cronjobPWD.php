<?php
function onOffice_cron_pwd_cb(){
    $fin_Daten = array();
    update_option( 'onOffice_cron_pwd', $_POST['onOffice_cron_pwd'] );
    $fin_Daten ['onOffice_cron_pwd'] = get_option( 'onOffice_cron_pwd' );

    wp_send_json_success( $fin_Daten );
    return true;
    wp_die();
}
// add_action('wp_ajax_onOffice_cron_pwd_cb', 'onOffice_cron_pwd_cb');
add_action('wp_ajax_onOffice_cron_pwd_cb', 'onOffice_cron_pwd_cb');