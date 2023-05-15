<?php
//Metaboxes
add_action( 'admin_enqueue_scripts', 'load_admin_style_projects' );
function load_admin_style_projects() {
    global $pagenow;

    if ( 'post.php' === $pagenow && isset($_GET['post']) && 'projects' === get_post_type( $_GET['post'] ) ) {
        //css main style
        wp_enqueue_style('fin_css_main_style',  EUGEN_ONOFFICE_PLUGIN_URL.'asset/css/materialize.min.css');
        wp_enqueue_style('fin_css_main_style');

        wp_enqueue_style('boni_custom_css_main_style',  EUGEN_ONOFFICE_PLUGIN_URL.'asset/css/boni_css.css');
        wp_enqueue_style('boni_custom_css_main_style');


        wp_register_script('bfin_js_main_script',   EUGEN_ONOFFICE_PLUGIN_URL.'asset/js/materialize.min.js', array('jquery'), '1.0.0', true);
        wp_enqueue_script('bfin_js_main_script');
        //js custom script
        wp_register_script('boni_custom_js_main_script',   EUGEN_ONOFFICE_PLUGIN_URL.'asset/js/backend_js.js', '', '1.0.0', true);
        wp_enqueue_script('boni_custom_js_main_script');

    }
}





//Remove Editor from Bonität Post
add_action('init', 'my_rem_editor_from_projects');
function my_rem_editor_from_projects() {
    remove_post_type_support( 'projects', 'editor' );
}

//Add Metabox to Bonität
add_action( 'admin_menu', 'projects_add_metabox' );
function projects_add_metabox() {

    add_meta_box(
        'projects_metabox', // metabox ID
        'Informationen', // title
        'projects_metabox_callback', // callback function
        'projects', // add meta box to custom post type (or post types in array)
        'normal', // position (normal, side, advanced)
        'default' // priority (default, low, high, core)
    );

}


// it is a callback function which actually displays the content of the meta box
function projects_metabox_callback( $post ) {
  include 'metaboxesContent_de.php';
}