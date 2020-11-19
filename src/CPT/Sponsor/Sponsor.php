<?php


namespace FTM\FreethinkPlugin\CPT\Sponsor;

/**
 * Class Profile
 */
class Sponsor {

	const NAME = 'ftm_sponsor';

	static function get_register_cpt_args() {
		return [
			'id' => 'ftm_person',
			'labels'      => [
				'singular'     => _x( 'Sponsor', 'freethink', 'freethink' ),
				'plural'       => _x( 'Sponsors', 'freethink', 'freethink' ),
				'slug'         => _x( 'sponsor', 'freethink', 'freethink' ),
				'name'         => _x( 'Sponsors', 'freethink', 'freethink' ),
				// 'add_new_item' => _x( 'Add New Project', 'archive item', 'freethink' ),
				// 'edit_item'    => _x( 'Edit Archive Item', 'archive item', 'freethink' ),
				// Overrides the “Featured Image” label
				'featured_image'        => _x( 'Thumbnail image', 'freethink', 'freethink' ),
				// Overrides the “Set featured image” label
				'set_featured_image'    => _x( 'Set thumbnail image', 'freethink', 'freethink' ),
				// Overrides the “Remove featured image” label
				'remove_featured_image' => _x( 'Remove thumbnail image', 'freethink', 'freethink' ),
				// Overrides the “Use as featured image” label
				'use_featured_image'    => _x( 'Use as thumbnail image', 'freethink', 'freethink' ),
			],
			'public'             => false,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => false,
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'menu_icon'          => 'dashicons-star-filled',
			'menu_position'      => null,
			'supports'           => [ 'title', 'editor', 'author'  ],
			'map_meta_cap'       => true,
			'show_in_rest'       => true,
		];
	}

}
