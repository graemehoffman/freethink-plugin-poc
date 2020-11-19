<?php
/**
 * Custom Post Type controller
 *
 */

namespace FTM\FreethinkPlugin\Controller;

use FTM\FreethinkPlugin\CPT\Article\Rewrite;
use FTM\FreethinkPlugin\CPT\CPT;
use FTM\FreethinkPlugin\Events\EventManager;
use FTM\FreethinkPlugin\Controller\Controller;
use FTM\FreethinkPlugin\Container\ContainerInterface;

class CPTController extends Controller
{
	/**
	 * Constructor
	 *
	 * @param    ContainerInterface    $container
	 */
	public function __construct(ContainerInterface $container)
	{
		parent::__construct($container);
	}

	/**
	 * Add the custom post types
	 *
	 * @return void
	 */
	public function add_custom_post_types()
	{
		EventManager::addAction('init', [ CPT::class, 'register' ]);

		EventManager::addAction('init', [ CPT::class, 'taxonomy' ]);
	}

	/**
	 * Rewrites
	 *
	 * @return void
	 */
	public function setup_rewrites() {

		EventManager::addFilter(
			'post_type_link',
			[
				$this->container->get('post_types.articles.rewrite'),
				'modify_post_type_link'
			],
			10,
			3
		);

		EventManager::addAction(
			'init',
			[
				$this->container->get('post_types.articles.rewrite'),
				'section_article_rewrites'
			]
		);

	}
}
