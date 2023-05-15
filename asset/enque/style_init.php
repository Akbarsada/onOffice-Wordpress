<?php
//insert scripts and styles
function onOffice_style_init() {

//css main style
    wp_enqueue_style('css_main_style',  EUGEN_ONOFFICE_PLUGIN_URL.'asset/css/materialize.min.css');
    wp_enqueue_style('css_main_style');
//css main style
    wp_enqueue_style('custom_css_main_style',  EUGEN_ONOFFICE_PLUGIN_URL.'asset/css/custom_backend.css');
    wp_enqueue_style('custom_css_main_style');
//css main style
    wp_enqueue_style('icons_css_main_style',  "https://fonts.googleapis.com/icon?family=Material+Icons");
    wp_enqueue_style('icons_css_main_style');
//js main script
    wp_register_script('js_main_script',   EUGEN_ONOFFICE_PLUGIN_URL.'asset/js/materialize.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('js_main_script');
//js custom script
    wp_register_script('custom_js_main_script',   EUGEN_ONOFFICE_PLUGIN_URL.'asset/js/custom.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('custom_js_main_script');
}