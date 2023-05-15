<?php
/*                                                  

PLUGIN NAME: Wordpress OnOffice
Version: 1.0.1
Description: Plugin für die Anbindung an onOffice
Author: akbarsada
Author Mail: info@smartcoding.at
Text Domain: eugen
Domain Path: /src/assets/languages
Requires PHP: 7.3
*/


define( 'EUGEN_ONOFFICE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'EUGEN_ONOFFICE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

define( 'ON_OFFICE_AUTOLOADER_URL', plugin_dir_url( __FILE__ ).'requests/sdk/vendor/autoload.php' );
define( 'ON_OFFICE_AUTOLOADER_DIR', plugin_dir_path( __FILE__ ).'requests/sdk/vendor/autoload.php' );

define( 'TINY_PNG_AUTOLOADER_URL', plugin_dir_url( __FILE__ ).'requests/tiny/autoload.php' );
define( 'TINY_PNG_AUTOLOADER_DIR', plugin_dir_path( __FILE__ ).'requests/tiny/autoload.php' );

/*
 * init project PostType
 */
require_once( EUGEN_ONOFFICE_PLUGIN_DIR . 'backend/dashboard/metabox/projectsMetaboxes_de.php');
/*
 * init backend option page
 */
require_once( EUGEN_ONOFFICE_PLUGIN_DIR . 'backend/dashboard/option_page.php');

/*
 * init ajax functions
 */
require_once( EUGEN_ONOFFICE_PLUGIN_DIR . 'ajax/ajaxFunctions.php');

/*
 * enque styles and scripts
 */
require_once( EUGEN_ONOFFICE_PLUGIN_DIR . 'asset/enque/style_init.php');

//Cronjob
/*
 * init cronjob api
 */
require_once( EUGEN_ONOFFICE_PLUGIN_DIR . 'cronjobs/estate_request/request_job_api.php');

/*
 * init estate Taxonomy
 */
require_once( EUGEN_ONOFFICE_PLUGIN_DIR . 'backend/taxonomy/estateTaxonomy.php');

/*
 * init estate PostType
 */
require_once( EUGEN_ONOFFICE_PLUGIN_DIR . 'backend/post_types/estatePosttype.php');

/*
 * init estate PostType
 */
require_once( EUGEN_ONOFFICE_PLUGIN_DIR . 'backend/post_types/estatePosttype_en.php');

/*
 * init project PostType
 */
require_once( EUGEN_ONOFFICE_PLUGIN_DIR . 'backend/post_types/projectPosttype.php');

/*
 * init project PostType
 */
require_once( EUGEN_ONOFFICE_PLUGIN_DIR . 'backend/post_types/projectPosttype_en.php');



/*
 * init class Estates
 */
require_once( EUGEN_ONOFFICE_PLUGIN_DIR . 'response/Estate.php');

/*
 * init class Projects
 */
require_once( EUGEN_ONOFFICE_PLUGIN_DIR . 'response/Project.php');



