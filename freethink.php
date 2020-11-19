<?php

/**
 * @package Freethink Plugin
 */
/*
 * Plugin Name:       Freethink
 * Description:       Freethink Demo
 * Version:           0.0.1
 * Author:            Freethink
 * Author URI:        https://freethink.com/
 * Text Domain:       freethink
 */

use FTM\FreethinkPlugin\Plugin;
use FTM\FreethinkPlugin\Container\Container;
use FTM\FreethinkPlugin\Setup\Activation;

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
     die;
}

$autoloader = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloader)) {
    include_once $autoloader;
}

// $results = $autoloader->findFile("\MyNamespace\MyClassName");
// print "Found file for class at: $results";

Activation::register(__FILE__);

add_action('plugins_loaded', function () {
    $container = container();
    $container->set( 'plugin', Plugin::getInstance( $container, __FILE__ ) );
    $container->get( 'plugin' )->init();
});

/**
 * Get plugin's container
 *
 * @since  0.2.0
 * @return Container
 */
function container() : Container
{
    static $container;
    if (! $container) {
        $container = new Container();
    }
    return $container;
}
