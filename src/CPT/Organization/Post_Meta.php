<?php


namespace FTM\FreethinkPlugin\CPT\Organization;

use FTM\FreethinkPlugin\CPT\Challenge\Challenge;
use FTM\FreethinkPlugin\CPT\Field\Field;
use FTM\FreethinkPlugin\CPT\Person\Person;
use FTM\FreethinkPlugin\CPT\Section\Section;

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
					'key' => 'field_org_type_tax',
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

				// Bidirectional
				array (
					'key' => 'field_organization_related_challenges_profiles',
					'label' => 'Related Challenges',
					'name' => 'related_challenges_profiles',
					'type' => 'post_object',
					'ui' => 1,
					'multiple' => 1,
					'allow_null' => 1,
					'post_type' => [
						Challenge::NAME,
					]
				),

				// Bidirectional
				array (
					'key' => 'field_organization_related_profiles_fields',
					'label' => 'Related Fields',
					'name' => 'related_profiles_fields',
					'type' => 'post_object',
					'ui' => 1,
					'multiple' => 1,
					'allow_null' => 1,
					'post_type' => [
						Field::NAME
					],
					'filters' => [
						'search'
					],
				),

				// Bidirectional
				array (
					'key' => 'field_organization_related_profiles_sections',
					'label' => 'Related Sections',
					'name' => 'related_profiles_sections',
					'type' => 'post_object',
					'ui' => 1,
					'multiple' => 1,
					'allow_null' => 1,
					'post_type' => [
						Section::NAME
					],
					'filters' => [
						'search'
					],
				),

				// Bidirectional
				array (
					'key' => 'field_organization_related_profiles',
					'label' => 'Related Profiles',
					'name' => 'related_profiles',
					'type' => 'post_object',
					'ui' => 1,
					'multiple' => 1,
					'allow_null' => 1,
					'post_type' => [
						Organization::NAME,
						Person::NAME
					],
					'filters' => [
						'search'
					],
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
