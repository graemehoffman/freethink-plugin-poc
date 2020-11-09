<?php


namespace FTM\FreethinkPlugin\CPT\Section;

/**
 * Class Section
 *
 */
class Section {

	const NAME = 'ftm_section';

	static function get_register_cpt_args() {
		return [
			'id' => 'ftm_section',
			'labels'      => [
				'singular'     => _x( 'Section', 'freethink', 'freethink' ),
				'plural'       => _x( 'Sections', 'freethink', 'freethink' ),
				'slug'         => _x( 'section', 'freethink', 'freethink' ),
				'name'         => _x( 'Sections', 'freethink', 'freethink' ),
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
			'rewrite'            => [ 'slug' => 'sections' ],
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_icon'          => 'dashicons-star-filled',
			'menu_position'      => null,
			'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ],
			'map_meta_cap'       => true,
			'show_in_rest'       => true,
		];
	}

}
