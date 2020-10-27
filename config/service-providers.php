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

    'post_types.profiles.post_meta' => [
	    'class' => FTM\FreethinkPlugin\CPT\Profile\Post_Meta::class,
    ],

    'post_types.narratives.post_meta' => [
	    'class' => FTM\FreethinkPlugin\CPT\Narrative\Post_Meta::class,
    ],

    'post_types.projects.post_meta' => [
	    'class' => FTM\FreethinkPlugin\CPT\Project\Post_Meta::class,
    ],

    'post_types.fields.post_meta' => [
	    'class' => FTM\FreethinkPlugin\CPT\Field\Post_Meta::class,
    ],

    'post_types.sections.post_meta' => [
	    'class' => FTM\FreethinkPlugin\CPT\Section\Post_Meta::class,
    ],

];
