<?php


namespace FTM\FreethinkPlugin\CPT\Article;


use FTM\FreethinkPlugin\CPT\Challenge\Challenge;
use FTM\FreethinkPlugin\CPT\Field\Field;
use FTM\FreethinkPlugin\CPT\Person\Person;
use FTM\FreethinkPlugin\CPT\Organization\Organization;

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
			'key' => 'group_article_titles',
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
					'ui'			=> 1,
					'message' => 'Swap h1 and h2 tags for content titles'
				)
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => Article::NAME    ,
					),
				),
			),
		));


		acf_add_local_field_group(array(
			'key' => 'group_article_relationships',
			'title' => 'Relationships',
			'fields' => array (

				array (
					'key' => 'fields',
					'label' => 'Related Fields',
					'name' => 'fields',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Field::NAME
					]
				),
				array (
					'key' => 'related_challenges',
					'label' => 'Related Challenges',
					'name' => 'related_challenges',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Challenge::NAME
					]
				),
				array (
					'key' => 'related_profiles',
					'label' => 'Related Profiles',
					'name' => 'related_profiles',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Person::NAME,
						Organization::NAME
					]
				),
				array (
					'key' => 'projects',
					'label' => 'Project Tags',
					'name' => 'projects',
					'type' => 'taxonomy',
					'taxonomy' => 'ftm_taxonomy_projects',
					'allow_null' => 1,
					'field_type' 		=> 'select',
					'multiple' => 1,
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => Article::NAME    ,
					),
				),
			),
		));


		acf_add_local_field_group(array(
			'key' => 'group_narrative_meta',
			'title' => 'Meta Info',
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
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => Article::NAME    ,
					),
				),
			),
		));

	}

}