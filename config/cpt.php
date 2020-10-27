<?php
/**
 * Custom Post Type configurations.
 *
 * @package    FTM\FreethinkPlugin
 * @since      0.4.0
 * @author     graemehoffman
 * @license    GNU General Public License 2.0+
 */


return [

	/*
	[
		'id' => 'ftm_project',
		'labels'      => [
			'singular'     => _x( 'Project', 'freethink', 'freethink' ),
			'plural'       => _x( 'Projects', 'freethink', 'freethink' ),
			'slug'         => _x( 'project', 'freethink', 'freethink' ),
			'name'         => _x( 'Projects', 'freethink', 'freethink' ),
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
		'rewrite'            => [ 'slug' => 'freethink' ],
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-star-filled',
		'menu_position'      => null,
		'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ],
		'show_in_rest' => true,
		'map_meta_cap'       => true,
	],
	*/

	[
		'id' => 'ftm_challenge',
		'labels'      => [
			'singular'     => _x( 'Challenge', 'freethink', 'freethink' ),
			'plural'       => _x( 'Challenges', 'freethink', 'freethink' ),
			'slug'         => _x( 'challenge', 'freethink', 'freethink' ),
			'name'         => _x( 'Challenges', 'freethink', 'freethink' ),
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
		'rewrite'            => [ 'slug' => 'freethink' ],
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-star-filled',
		'menu_position'      => null,
		'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ],
		'show_in_rest' => true,
		'map_meta_cap'       => true,
	],

	[
		'id' => 'ftm_contributor',
		'labels'      => [
			'singular'     => _x( 'Contributor', 'freethink', 'freethink' ),
			'plural'       => _x( 'Contributors', 'freethink', 'freethink' ),
			'slug'         => _x( 'contributor', 'freethink', 'freethink' ),
			'name'         => _x( 'Contributors', 'freethink', 'freethink' ),
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
		'rewrite'            => [ 'slug' => 'freethink' ],
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-star-filled',
		'menu_position'      => null,
		'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ],
		'show_in_rest' => true,
		'map_meta_cap'       => true,
	],

	[
		'id' => 'ftm_profile',
		'labels'      => [
			'singular'     => _x( 'Profile', 'freethink', 'freethink' ),
			'plural'       => _x( 'Profiles', 'freethink', 'freethink' ),
			'slug'         => _x( 'profile', 'freethink', 'freethink' ),
			'name'         => _x( 'Profiles', 'freethink', 'freethink' ),
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
		'rewrite'            => [ 'slug' => 'freethink' ],
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-star-filled',
		'menu_position'      => null,
		'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ],
		'show_in_rest' => true,
		'map_meta_cap'       => true,
	],

	[
		'id' => 'ftm_field',
		'labels'      => [
			'singular'     => _x( 'Field', 'freethink', 'freethink' ),
			'plural'       => _x( 'Fields', 'freethink', 'freethink' ),
			'slug'         => _x( 'field', 'freethink', 'freethink' ),
			'name'         => _x( 'Fields', 'freethink', 'freethink' ),
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
		'rewrite'            => [ 'slug' => 'freethink' ],
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-star-filled',
		'menu_position'      => null,
		'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ],
		'show_in_rest' => true,
		'map_meta_cap'       => true,
	],

	[
		'id' => 'ftm_narrative',
		'labels'      => [
			'singular'     => _x( 'Narrative', 'freethink', 'freethink' ),
			'plural'       => _x( 'Narratives', 'freethink', 'freethink' ),
			'slug'         => _x( 'narrative', 'freethink', 'freethink' ),
			'name'         => _x( 'Narratives', 'freethink', 'freethink' ),
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
		'rewrite'            => [ 'slug' => 'freethink' ],
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-star-filled',
		'menu_position'      => null,
		'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ],
		'show_in_rest' => true,
		'map_meta_cap'       => true,
	],
	[
		'id' => 'ftm_collections',
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
		'rewrite'            => [ 'slug' => 'freethink' ],
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-star-filled',
		'menu_position'      => null,
		'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ],
		'map_meta_cap'       => true,
	],
	[
		'id' => 'ftm_section',
		'labels'      => [
			'singular'     => _x( 'Section', 'freethink', 'freethink' ),
			'plural'       => _x( 'Sections', 'freethink', 'freethink' ),
			'slug'         => _x( 'section', 'freethink', 'freethink' ),
			'name'         => _x( 'Sections', 'freethink', 'freethink' ),
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
		'rewrite'            => [ 'slug' => 'freethink' ],
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_icon'          => 'dashicons-star-filled',
		'menu_position'      => null,
		'supports'           => [ 'title', 'editor', 'author', 'thumbnail', 'excerpt' ],
		'map_meta_cap'       => true,
		'show_in_rest'       => true,
	]

];
