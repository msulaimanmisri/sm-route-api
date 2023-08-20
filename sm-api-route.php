<?php

/**
 * Plugin Name:       SM Api Route
 * Plugin URI:        https://github.com/msulaimanmisri
 * Description:       This plugin will create custom API Endpoint
 * Version:           1.0
 * Author:            Sulaiman Misri
 * Author URI:        https://github.com/msulaimanmisri
 * Text Domain:       sm-api-route
 * Domain Path:       /languages
 */

if (!defined('ABSPATH')) {
    exit();
}

require 'routes/get-user.php';
