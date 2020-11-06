<?php


namespace FTM\FreethinkPlugin\CPT\Challenge;

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
			'key' => 'group_challenge_1',
			'title' => 'Challenge Details',
			'fields' => array (
				array (
					'key' => 'challenge_related_fields',
					'label' => 'Related Fields',
					'name' => 'related_fields',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
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
						'value' => Challenge::NAME    ,
					),
				),
			),
		));

	}

}
