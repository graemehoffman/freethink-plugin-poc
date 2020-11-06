<?php


namespace FTM\FreethinkPlugin\CPT\Organization;

use FTM\FreethinkPlugin\CPT\Challenge\Challenge;
use FTM\FreethinkPlugin\CPT\Field\Field;
use FTM\FreethinkPlugin\CPT\Person\Person;

/**
 * Class Post Meta
 *
 */
class Post_Meta {

	protected $container;

	public function hooks() {

		add_action('acf/init', [ $this, 'my_acf_init' ] );

	}

	public function my_acf_init() {
		$this->add_fields();
	}

	public function add_fields() {

		acf_add_local_field_group(array(
			'key' => 'group_org_0',
			'title' => 'Organization Info',
			'fields' => array (

				array (
					'key' => 'org_type_tax',
					'label' => 'Organization Type',
					'name' => 'org_type_tax',
					'type' => 'taxonomy',
					'taxonomy' => 'ftm_taxonomy_organization_types',
					'allow_null' => 1,
					'field_type' => 'select',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => Organization::NAME,
					),
				),
			),
		));

		acf_add_local_field_group(array(
			'key' => 'group_profile_1',
			'title' => 'Organization Relationships',
			'fields' => array (
				array (
					'key' => 'related_person_fields',
					'label' => 'Related Fields',
					'name' => 'related_person_fields',
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
						'value' => Organization::NAME    ,
					),
				),
			),
		));

	}

}
