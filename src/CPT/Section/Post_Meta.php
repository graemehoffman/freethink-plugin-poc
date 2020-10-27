<?php


namespace FTM\FreethinkPlugin\CPT\Section;

use FTM\FreethinkPlugin\CPT\Field\Field;


/**
 * Class Post Meta
 */
class Post_Meta {

	const FIELD_TYPE = 'div_ai_field_type';

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
			'title' => 'Section Details',
			'fields' => array (
				array (
					'key' => 'fields',
					'label' => 'Fields',
					'name' => 'fields',
					'type' => 'relationship',
					'post_type' => [
						Field::NAME
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
