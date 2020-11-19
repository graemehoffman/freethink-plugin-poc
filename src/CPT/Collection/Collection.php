<?php


namespace FTM\FreethinkPlugin\CPT\Collection;

/**
 * Class Project
 *
 */
class Collection {

	const NAME = 'ftm_collection';

	static function get_register_cpt_args() {
		return [
			'id' => 'ftm_collection',
			'labels'      => [
				'singular'     => _x( 'Collection', 'freethink', 'freethink' ),
				'plural'       => _x( 'Collections', 'freethink', 'freethink' ),
				'slug'         => _x( 'collection', 'freethink', 'freethink' ),
				'name'         => _x( 'Collections', 'freethink', 'freethink' ),
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
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => [ 'slug' => 'collections' ],
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_icon'          => 'dashicons-paperclip',
			'menu_position'      => null,
			'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ],
			'map_meta_cap'       => true,
		];
	}

}
