<?php

use \FTM\FreethinkPlugin\CPT\Project\Project;
use \FTM\FreethinkPlugin\CPT\Narrative\Narrative;
use \FTM\FreethinkPlugin\CPT\Profile\Profile;
use \FTM\FreethinkPlugin\CPT\Challenge\Challenge;

return [
	'ftm_taxonomy_project_types' => [
		'args' => [
			'hierarchical'      => false,
			'labels'            => [
				'name'              => 'Project Type',
				'singular_name'     => 'Project Type',
				'search_items'      => sprintf( __( 'Search %s', 'freethink' ), 'Project Types' ),
				'all_items'         => sprintf( __( 'All %s', 'freethink' ), 'Project Types' ),
				'parent_item'       => sprintf( __( 'Parent %s', 'freethink' ), 'Project Type' ),
				'parent_item_colon' => sprintf( __( 'Parent %s:', 'freethink' ), 'Project Type' ),
				'edit_item'         => sprintf( __( 'Edit %s', 'freethink' ), 'Project Type' ),
				'update_item'       => sprintf( __( 'Update %s', 'freethink' ), 'Project Type' ),
				'add_new_item'      => sprintf( __( 'Add %s', 'freethink' ), 'Project Type' ),
				'new_item_name'     => sprintf( __( 'New %s', 'freethink' ), 'Project Type' ),
				'menu_name'         => 'Project Types',
			],
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_rest' => true,
			'query_var'         => true,
			'rewrite'           => [
				'slug' => 'project-types'
			],
			'show_in_menu'      => true
		],
		'post_types' => [
			Project::NAME
		]
	],
	'ftm_taxonomy_narrative_types' => [
		'args' => [
			'hierarchical'      => false,
			'labels'            => [
				'name'              => 'Narrative Type',
				'singular_name'     => 'Narrative Type',
				'search_items'      => sprintf( __( 'Search %s', 'freethink' ), 'Narrative Types' ),
				'all_items'         => sprintf( __( 'All %s', 'freethink' ), 'Narrative Types' ),
				'parent_item'       => sprintf( __( 'Parent %s', 'freethink' ), 'Narrative Type' ),
				'parent_item_colon' => sprintf( __( 'Parent %s:', 'freethink' ), 'Narrative Type' ),
				'edit_item'         => sprintf( __( 'Edit %s', 'freethink' ), 'Narrative Type' ),
				'update_item'       => sprintf( __( 'Update %s', 'freethink' ), 'Narrative Type' ),
				'add_new_item'      => sprintf( __( 'Add %s', 'freethink' ), 'Narrative Type' ),
				'new_item_name'     => sprintf( __( 'New %s', 'freethink' ), 'Narrative Type' ),
				'menu_name'         => 'Narrative Types',
			],
			'show_ui'           => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [
				'slug' => 'narrative-types'
			],
			'show_in_menu'      => true
		],
		'post_types' => [
			Narrative::NAME
		]
	],

	'ftm_taxonomy_challenge_types' => [
		'args' => [
			'hierarchical'      => false,
			'labels'            => [
				'name'              => 'Challenge Type',
				'singular_name'     => 'Challenge Type',
				'search_items'      => sprintf( __( 'Search %s', 'freethink' ), 'Challenge Types' ),
				'all_items'         => sprintf( __( 'All %s', 'freethink' ), 'Challenge Types' ),
				'parent_item'       => sprintf( __( 'Parent %s', 'freethink' ), 'Challenge Type' ),
				'parent_item_colon' => sprintf( __( 'Parent %s:', 'freethink' ), 'Challenge Type' ),
				'edit_item'         => sprintf( __( 'Edit %s', 'freethink' ), 'Challenge Type' ),
				'update_item'       => sprintf( __( 'Update %s', 'freethink' ), 'Challenge Type' ),
				'add_new_item'      => sprintf( __( 'Add %s', 'freethink' ), 'Challenge Type' ),
				'new_item_name'     => sprintf( __( 'New %s', 'freethink' ), 'Challenge Type' ),
				'menu_name'         => 'Challenge Types',
			],
			'show_ui'           => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [
				'slug' => 'challenge-types'
			],
			'show_in_menu'      => true
		],
		'post_types' => [
			Challenge::NAME
		]
	],

	'ftm_taxonomy_profile_types' => [
		'args' => [
			'hierarchical'      => false,
			'labels'            => [
				'name'              => 'Profile Type',
				'singular_name'     => 'Profile Type',
				'search_items'      => sprintf( __( 'Search %s', 'freethink' ), 'Profile Types' ),
				'all_items'         => sprintf( __( 'All %s', 'freethink' ), 'Profile Types' ),
				'parent_item'       => sprintf( __( 'Parent %s', 'freethink' ), 'Profile Type' ),
				'parent_item_colon' => sprintf( __( 'Parent %s:', 'freethink' ), 'Profile Type' ),
				'edit_item'         => sprintf( __( 'Edit %s', 'freethink' ), 'Profile Type' ),
				'update_item'       => sprintf( __( 'Update %s', 'freethink' ), 'Profile Type' ),
				'add_new_item'      => sprintf( __( 'Add %s', 'freethink' ), 'Profile Type' ),
				'new_item_name'     => sprintf( __( 'New %s', 'freethink' ), 'Profile Type' ),
				'menu_name'         => 'Profile Types',
			],
			'show_ui'           => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [
				'slug' => 'profile-types'
			],
			'show_in_menu'      => true
		],
		'post_types' => [
			Profile::NAME
		]
	],

	/*
	'ftm_taxonomy_profile_person_types' => [
		'args' => [
			'hierarchical'      => false,
			'labels'            => [
				'name'              => 'Person Type',
				'singular_name'     => 'Person Type',
				'search_items'      => sprintf( __( 'Search %s', 'freethink' ), 'Person Types' ),
				'all_items'         => sprintf( __( 'All %s', 'freethink' ), 'Person Types' ),
				'parent_item'       => sprintf( __( 'Parent %s', 'freethink' ), 'Person Type' ),
				'parent_item_colon' => sprintf( __( 'Parent %s:', 'freethink' ), 'Person Type' ),
				'edit_item'         => sprintf( __( 'Edit %s', 'freethink' ), 'Person Type' ),
				'update_item'       => sprintf( __( 'Update %s', 'freethink' ), 'Person Type' ),
				'add_new_item'      => sprintf( __( 'Add %s', 'freethink' ), 'Person Type' ),
				'new_item_name'     => sprintf( __( 'New %s', 'freethink' ), 'Person Type' ),
				'menu_name'         => 'Person Types',
			],
			'show_ui'           => true,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [
				'slug' => 'person-types'
			],
			'show_in_menu'      => true
		],
		'post_types' => [
			Profile::NAME
		]
	],
	*/

];