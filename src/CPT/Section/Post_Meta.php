<?php


namespace FTM\FreethinkPlugin\CPT\Section;

use FTM\FreethinkPlugin\CPT\Challenge\Challenge;
use FTM\FreethinkPlugin\CPT\Field\Field;
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
				array (
					'key' => 'section_fields',
					'label' => 'Fields',
					'name' => 'section_fields',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Field::NAME
					]
				),
				array (
					'key' => 'section_challenges',
					'label' => 'Challenges',
					'name' => 'section_challenges',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Challenge::NAME
					]
				),
				array (
					'key' => 'section_persons',
					'label' => 'People',
					'name' => 'section_persons',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Person::NAME
					]
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => Section::NAME    ,
					),
				),
			),
		));

	}

}
