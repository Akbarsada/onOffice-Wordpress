<?php
function add_onOffice_page() {
    $backend_page = add_menu_page(
        'onOffice Options', //Page Title
        'onOffice', //Menu Title
        'manage_options', //Capability
        'onOffice', //Page slug
        'onOffice_page_html', //Callback Function
        EUGEN_ONOFFICE_PLUGIN_URL.'/asset/img/onoffice.png',
        2 );

    add_action('admin_print_styles-' . $backend_page, 'onOffice_style_init');


}
add_action( 'admin_menu', 'add_onOffice_page' );

function onOffice_page_html() {
    if ( ! current_user_can( 'manage_options' ) ) {
        return;
    }

    $default_tab_onOffice = null;
    $form_tab_onOffice = isset($_GET['page']) ? $_GET['page'] : $default_tab_onOffice;

    ?>

    <div class="row" style="margin: 50px;" >
        <nav>
            <div class="nav-wrapper">
                <a href="#!" class="right brand-logo">
                    <img src="<?php echo EUGEN_OPT_PLUGIN_URL.'asset/img/eugen_logo.png' ?>" height="31px">
                </a>
                <ul class="left hide-on-med-and-down">
                    <li><a  href="#" data-target="dropdown1">onOffice</a></li>
                </ul>
            </div>
        </nav>
        <?php
        if($form_tab_onOffice == 'onOffice'){
            include EUGEN_ONOFFICE_PLUGIN_DIR . 'backend/dashboard/templates/tokkenSecretPart.php';
            include EUGEN_ONOFFICE_PLUGIN_DIR . 'backend/dashboard/templates/requestPart.php';
            add_action( 'admin_footer', 'onOffice_ajax' );
        }?>
    </div>


<?php }