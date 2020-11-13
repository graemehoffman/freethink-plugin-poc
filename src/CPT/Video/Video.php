<?php


namespace FTM\FreethinkPlugin\CPT\Video;

/**
 * Class Video
 */
class Video {

	const NAME = 'ftm_video';

	static function get_register_cpt_args() {
		return [
			'id' => 'ftm_article',
			'labels'      => [
				'singular'     => _x( 'Video', 'freethink', 'freethink' ),
				'plural'       => _x( 'Videos', 'freethink', 'freethink' ),
				'slug'         => _x( 'video', 'freethink', 'freethink' ),
				'name'         => _x( 'Videos', 'freethink', 'freethink' ),
				// Overrides the “Featured Image” label
				'featured_image'        => _x( 'Thumbnail image', 'freethink', 'freethink' ),
				// Overrides the “Set featured image” label
				'set_featured_image'    => _x( 'Set thumbnail image', 'freethink', 'freethink' ),
				// Overrides the “Remove featured image” label
				'remove_featured_image' => _x( 'Remove thumbnail image', 'freethink', 'freethink' ),
				// Overrides the “Use as featured image” label
				'use_featured_image'    => _x( 'Use as thumbnail image', 'freethink', 'freethink' ),
			],
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => [ 'slug' => 'articles' ],
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_icon'          => 'dashicons-star-filled',
			'menu_position'      => null,
			'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ],
			'show_in_rest' => true,
			'map_meta_cap'       => true,
		];
	}

}
