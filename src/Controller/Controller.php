<?php
/**
 * Base controller class
 *
 *
 */

namespace FTM\FreethinkPlugin\Controller;

use FTM\FreethinkPlugin\Container\ContainerInterface;

class Controller
{
    /**
     * Container instance
     * @var Container
     */
    public $container;

    /**
     * Constructor
     *
     * @since 0.3.0
     * @param ContainerInterface    $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
}
