<?php


namespace FTM\FreethinkPlugin\CPT\Field;


use FTM\FreethinkPlugin\CPT\Field\Field;

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
			'key' => 'group_field_info',
			'title' => 'Related Info',
			'fields' => array (
				array (
					'key' => 'fields',
					'label' => 'Related Fields',
					'name' => 'fields',
					'type' => 'relationship',
					'post_type' => [
						Field::NAME
					],
					'filters' => [
						'search',
						'taxonomy'
					],
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => Field::NAME    ,
					),
				),
			),
		));

	}

}
