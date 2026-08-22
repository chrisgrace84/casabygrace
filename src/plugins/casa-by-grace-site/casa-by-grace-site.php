<?php
/**
 * Plugin Name: TGHP CasaByGrace
 * Description: Main plugin for CasaByGrace theme setup
 * Version:     1.0.0
 * Author:      TGHP
 */

// Define constants
define('TGHP_CASA_BY_GRACE_PLUGIN_VERSION', '1.0.0');
define('TGHP_CASA_BY_GRACE_PLUGIN_NAME', 'casa-by-grace-site');
define('TGHP_CASA_BY_GRACE_PLUGIN_METABOX_PREFIX', '_tghpcasaby-grace_');
define('TGHP_CASA_BY_GRACE_PLUGIN_PATH', dirname(__FILE__));
define('TGHP_CASA_BY_GRACE_PLUGIN_URL', untrailingslashit(plugins_url('/', __FILE__)));

// Prevent loading this file directly
if (!defined('ABSPATH')) {
    die();
}

// Abort plugin loading if WordPress is upgrading
if (defined('WP_INSTALLING') && WP_INSTALLING) {
    return;
}

// Init plugin
require TGHP_CASA_BY_GRACE_PLUGIN_PATH . '/inc/CasaByGrace.php';

/**
 * Return CasaByGrace instance
 *
 * @return \TGHP\CasaByGrace\CasaByGrace
 */
function TGHPCasaByGrace()
{
    $theme = wp_get_theme();

    if ($theme && ($theme->get_template() == 'casa-by-grace' || $theme->get_stylesheet() == 'casa-by-grace')) {
        return \TGHP\CasaByGrace\CasaByGrace::instance();
    }
}

/**
 * Alias for TGHPCasaByGrace function above
 *
 * @return  \TGHP\CasaByGrace\CasaByGrace
 */
function TGHPSite()
{
    return TGHPCasaByGrace();
}

TGHPCasaByGrace();
