<?php

/**
 * Plugin Name: QMimoKids
 * Plugin URI: https://ic.unicamp.br/~everton
 * Description: Plugin QMimoKids para configuração do site
 * Author: EvM.
 * Version: 1.0
 * Text Domain: QMimoKids
 * Plugin QMimoKids
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

// FUNCTIONS ************************************************
include ABSPATH . '/wp-content/plugins/qmimokids/includes/functions.php';

// TYPES ************************************************
//include ABSPATH . '/wp-content/plugins/qmimokids/includes/types/produtos.php';

// SETTINGS ************************************************
include ABSPATH . '/wp-content/plugins/qmimokids/includes/settings.php';

/* OBJECTS *************************************************
$produtos = new produtos();

register_activation_hook(__FILE__, array(    
    $produtos, 'activate'
));

register_deactivation_hook(__FILE__, array(
    $produtos, 'deactivate'   
));
*/
