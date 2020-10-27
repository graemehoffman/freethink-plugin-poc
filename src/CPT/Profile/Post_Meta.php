<?php


namespace FTM\FreethinkPlugin\CPT\Profile;

use FTM\FreethinkPlugin\CPT\Challenge\Challenge;
use FTM\FreethinkPlugin\CPT\Field\Field;

/**
 * Class Post Meta
 *
 */
class Post_Meta {

	const FIELD_TYPE = 'div_ai_field_type';

	protected $container;

	public function hooks() {

		add_action('acf/init', [ $this, 'my_acf_init' ] );

	}

	public function my_acf_init() {
		$this->add_fields();
	}

	public function add_fields() {

		acf_add_local_field_group(array(
			'key' => 'group_profile_0',
			'title' => 'Profile Details',
			'fields' => array (
				/*
				array (
					'key' => 'profile_type',
					'label' => 'Profile Type',
					'name' => 'profile_type',
					'type' => 'select',
					'allow_null' => 1,
					'choices' => array(
						'person'	=> 'Person',
						'organization' => 'Organization'
					),
				),
				*/
				array (
					'key' => 'profile_type_tax',
					'label' => 'Profile Type',
					'name' => 'profile_type_tax',
					'type' => 'taxonomy',
					'taxonomy' => 'ftm_taxonomy_profile_types',
					'allow_null' => 1,
					'field_type' 		=> 'select',
				),
				array (
					'key' => 'person_type_tax',
					'label' => 'Person Type',
					'name' => 'person_type_tax',
					'type' => 'taxonomy',
					'taxonomy' => 'ftm_taxonomy_profile_per_types',
					'allow_null' => 1,
					'field_type' 		=> 'select',
					'multiple' => 1,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'profile_type_tax',
								'operator' => '<',
								'value' => 13,
							),
							array (
								'field' => 'profile_type_tax',
								'operator' => '>',
								'value' => 11,
							),
						),
					),
				),

				array (
					'key' => 'org_type_tax',
					'label' => 'Organization Type',
					'name' => 'org_type_tax',
					'type' => 'taxonomy',
					'taxonomy' => 'ftm_taxonomy_profile_org_types',
					'allow_null' => 1,
					'field_type' 		=> 'select',
					'multiple' => 1,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'profile_type_tax',
								'operator' => '<',
								'value' => 14,
							),
							array (
								'field' => 'profile_type_tax',
								'operator' => '>',
								'value' => 12,
							),
						),
					),
				),
				/*
				 * ftm_taxonomy_profile_person_types
				array (
					'key' => 'profile_person_address',
					'label' => 'Person Address',
					'name' => 'profile_person_address',
					'type' => 'text',
					'conditional_logic' => array (
						array (
							array (
								'field' => 'profile_type_tax',
								'operator' => '<',
								'value' => 13,
							),
							array (
								'field' => 'profile_type_tax',
								'operator' => '>',
								'value' => 11,
							),
						),
					),
				),
				*/

			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => Profile::NAME    ,
					),
				),
			),
		));

		acf_add_local_field_group(array(
			'key' => 'group_profile_1',
			'title' => 'Profile Relationships',
			'fields' => array (
				array (
					'key' => 'related_profile_fields',
					'label' => 'Related Fields',
					'name' => 'related_section_fields',
					'type' => 'post_object',
					'placeholder' => 'Add related fields here',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'filters' => [
						'search'
					],
					'post_type' => [
						Field::NAME
					]
				),
				array (
					'key' => 'related_profile_challenges',
					'label' => 'Related Challenges',
					'name' => 'related_profile_challenges',
					'type' => 'post_object',
					'placeholder' => 'Add related fields here',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'filters' => [
						'search'
					],
					'post_type' => [
						Challenge::NAME
					]
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => Profile::NAME    ,
					),
				),
			),
		));

	}

}
