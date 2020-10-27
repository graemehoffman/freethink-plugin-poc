<?php
/**
 * Custom Post Type controller
 *
 */

namespace FTM\FreethinkPlugin\Controller;

use FTM\FreethinkPlugin\CPT\CPT;
use FTM\FreethinkPlugin\Events\EventManager;
use FTM\FreethinkPlugin\Controller\Controller;
use FTM\FreethinkPlugin\Container\ContainerInterface;

class CPTController extends Controller
{
    /**
     * Constructor
     *
     * @since    0.4.0
     * @param    ContainerInterface    $container
     */
    public function __construct(ContainerInterface $container)
    {
        parent::__construct($container);
    }

    /**
     * Add the custom post types
     *
     * @since 0.4.0
     * @return void
     */
    public function addCustomPostTypes()
    {
        EventManager::addAction('init', array(CPT::class, 'register'));

	    EventManager::addAction('init', array(CPT::class, 'taxonomy'));
    }
}
