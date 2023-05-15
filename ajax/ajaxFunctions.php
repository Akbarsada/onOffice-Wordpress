<?php
//include Ajax Requsts
function onOffice_ajax(){ ?>
    <?php  include EUGEN_ONOFFICE_PLUGIN_DIR .  'requests/requestFunction_ajax.php'; ?>
    <?php  include EUGEN_ONOFFICE_PLUGIN_DIR .  'backend/dashboard/buttons/tokkenSecret_ajax.php'; ?>
    <?php  include EUGEN_ONOFFICE_PLUGIN_DIR .  'backend/dashboard/buttons/cronjobPWD_ajax.php'; ?>




    <?php
}


//include Ajax Callback Functions 
include EUGEN_ONOFFICE_PLUGIN_DIR . 'requests/requestFunction.php';
include EUGEN_ONOFFICE_PLUGIN_DIR . 'backend/dashboard/buttons/tokkenSecret.php';
include EUGEN_ONOFFICE_PLUGIN_DIR . 'backend/dashboard/buttons/cronjobPWD.php';