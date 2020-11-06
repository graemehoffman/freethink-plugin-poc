<?php
/**
 * Service Providers
 *
 * @package    FTM\FreethinkPlugin
 * @since      0.3.0
 * @author     graemehoffman
 * @license    GNU General Public License 2.0+
 */

return [
    'loader' => [
        'class' => FTM\FreethinkPlugin\File\Loader::class,
    ],
    'constants' => [
        'class' => FTM\FreethinkPlugin\Constants\Constants::class,
        'dependencies' => [
            'constants-config',
        ],
    ],

    'controller' => [
	    'class' => FTM\FreethinkPlugin\Controller\Controller::class,
	    'dependencies' => [
		    'container',
	    ],
    ],
    'events' => [
	    'class' => DownShift\WordPress\EventEmitter::class,
    ],

    'cpt' => [
        'class' => FTM\FreethinkPlugin\CPT\CPT::class,
    ],
    'cpt_controller' => [
        'class' => FTM\FreethinkPlugin\Controller\CPTController::class,
        'dependencies' => [
            'container',
        ],
    ],

    'admin.dashboard' => [
	    'class' => FTM\FreethinkPlugin\Admin\Dashboard::class,
    ],

    'post_types.persons.post_meta' => [
		'class' => FTM\FreethinkPlugin\CPT\Person\Post_Meta::class,
	],

    'post_types.organizations.post_meta' => [
	    'class' => FTM\FreethinkPlugin\CPT\Organization\Post_Meta::class,
    ],

    'post_types.challenges.post_meta' => [
	    'class' => FTM\FreethinkPlugin\CPT\Challenge\Post_Meta::class,
    ],

    'post_types.articles.post_meta' => [
	    'class' => FTM\FreethinkPlugin\CPT\Article\Post_Meta::class,
    ],

    'post_types.fields.post_meta' => [
	    'class' => FTM\FreethinkPlugin\CPT\Field\Post_Meta::class,
    ],

    'post_types.sections.post_meta' => [
	    'class' => FTM\FreethinkPlugin\CPT\Section\Post_Meta::class,
    ],

    'post_types.collections.post_meta' => [
	    'class' => FTM\FreethinkPlugin\CPT\Collection\Post_Meta::class,
    ],

];
