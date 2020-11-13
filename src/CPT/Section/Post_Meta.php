<?php


namespace FTM\FreethinkPlugin\CPT\Section;

use FTM\FreethinkPlugin\CPT\Challenge\Challenge;
use FTM\FreethinkPlugin\CPT\Field\Field;
use FTM\FreethinkPlugin\CPT\Organization\Organization;
use FTM\FreethinkPlugin\CPT\Person\Person;


/**
 * Class Post Meta
 */
class Post_Meta {

	protected $container;

	public function hooks() {
		add_action('acf/init', [ $this, 'my_acf_init' ] );
	}

	public function my_acf_init()
	{
		$this->add_fields();
	}

	public function add_fields()
	{


		acf_add_local_field_group(array(
			'key' => 'group_section_1',
			'title' => 'Section Relationships',
			'fields' => array (

				// Bidirectional
				array (
					'key' => 'field_section_related_challenges_sections',
					'label' => 'Related Challenges',
					'name' => 'related_challenges_sections',
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
					'key' => 'field_section_related_sections_fields',
					'label' => 'Related Fields',
					'name' => 'related_sections_fields',
					'type' => 'post_object',
					'ui' => 1,
					'multiple' => 1,
					'allow_null' => 1,
					'post_type' => [
						Field::NAME,
					],
					'filters' => [
						'search'
					],
				),

				// Bidirectional
				array (
					'key' => 'field_section_related_profiles_sections',
					'label' => 'Related Profiles',
					'name' => 'related_profiles_sections',
					'type' => 'post_object',
					'ui' => 1,
					'multiple' => 1,
					'allow_null' => 1,
					'post_type' => [
						Person::NAME,
						Organization::NAME
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
						'value' => Section::NAME,
					),
				),
			),
		));

	}

}
