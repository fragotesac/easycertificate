<?php
/* For licensing terms, see /license.txt */
/**
 * This script is meant to update previous version the plugin.
 *
 * @package chamilo.plugin.easycertificate
 */
require_once __DIR__.'/config.php';

if (!api_is_platform_admin()) {
    die('You must have admin permissions to install plugins');
}

EasyCertificatePlugin::create()->update();
