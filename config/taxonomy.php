<?php

use \FTM\FreethinkPlugin\CPT\Article\Article;
use \FTM\FreethinkPlugin\CPT\Person\Person;
use \FTM\FreethinkPlugin\CPT\Organization\Organization;
use \FTM\FreethinkPlugin\CPT\Challenge\Challenge;

return [

	'ftm_taxonomy_projects' => [
		'args' => [
			'hierarchical'      => false,
			'labels'            => [
				'name'              => 'Project',
				'singular_name'     => 'Project',
				'search_items'      => sprintf( __( 'Search %s', 'freethink' ), 'Projects' ),
				'all_items'         => sprintf( __( 'All %s', 'freethink' ), 'Projects' ),
				'parent_item'       => sprintf( __( 'Parent %s', 'freethink' ), 'Project' ),
				'parent_item_colon' => sprintf( __( 'Parent %s:', 'freethink' ), 'Project' ),
				'edit_item'         => sprintf( __( 'Edit %s', 'freethink' ), 'Project' ),
				'update_item'       => sprintf( __( 'Update %s', 'freethink' ), 'Project' ),
				'add_new_item'      => sprintf( __( 'Add %s', 'freethink' ), 'Project' ),
				'new_item_name'     => sprintf( __( 'New %s', 'freethink' ), 'Project' ),
				'menu_name'         => 'Projects',
			],
			'show_ui'           => false,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [
				'slug' => 'projects'
			],
			'show_in_menu'      => true
		],
		'post_types' => [
			Article::NAME
		]
	],

	'ftm_taxonomy_person_types' => [
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
			'show_ui'           => false,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [
				'slug' => 'person-types'
			],
			'show_in_menu'      => true
		],
		'post_types' => [
			Person::NAME
		]
	],


	'ftm_taxonomy_organization_types' => [
		'args' => [
			'hierarchical'      => false,
			'labels'            => [
				'name'              => 'Organization Type',
				'singular_name'     => 'Organization Type',
				'search_items'      => sprintf( __( 'Search %s', 'freethink' ), 'Organization Types' ),
				'all_items'         => sprintf( __( 'All %s', 'freethink' ), 'Organization Types' ),
				'parent_item'       => sprintf( __( 'Parent %s', 'freethink' ), 'Organization Type' ),
				'parent_item_colon' => sprintf( __( 'Parent %s:', 'freethink' ), 'Organization Type' ),
				'edit_item'         => sprintf( __( 'Edit %s', 'freethink' ), 'Organization Type' ),
				'update_item'       => sprintf( __( 'Update %s', 'freethink' ), 'Organization Type' ),
				'add_new_item'      => sprintf( __( 'Add %s', 'freethink' ), 'Organization Type' ),
				'new_item_name'     => sprintf( __( 'New %s', 'freethink' ), 'Organization Type' ),
				'menu_name'         => 'Organization Types',
			],
			'show_ui'           => false,
			'show_in_rest' => true,
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => [
				'slug' => 'org-types'
			],
			'show_in_menu'      => true
		],
		'post_types' => [
			Organization::NAME
		]
	],


];
