<?php


namespace FTM\FreethinkPlugin\CPT\Narrative;


use FTM\FreethinkPlugin\CPT\Contributor\Contributor;
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
			'key' => 'group_1',
			'title' => 'Titles',
			'fields' => array (
				array (
					'key' => 'big_title',
					'label' => 'Big Title Override',
					'name' => 'big_title',
					'type' => 'text',
				),
				array (
					'key' => 'small_title',
					'label' => 'Small Title',
					'name' => 'small_title',
					'type' => 'text',
				),
				array (
					'key' => 'swap_header_tags',
					'label' => 'Swap Header Tags',
					'name' => 'true_false_headers',
					'type' => 'true_false',
					'message' => 'Swap h1 and h2 tags for content titles'
				)
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => Narrative::NAME    ,
					),
				),
			),
		));


		acf_add_local_field_group(array(
			'key' => 'group_article_info',
			'title' => 'Article Info',
			'fields' => array (
				array (
					'key' => 'contributors',
					'label' => 'Contributors',
					'name' => 'contributors',
					'type' => 'user',
					'multiple' => 1,
					'role' => [
						'author',
						'editor'
					]
				),
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
						'value' => Narrative::NAME    ,
					),
				),
			),
		));

	}

}
