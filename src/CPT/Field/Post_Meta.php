<?php


namespace FTM\FreethinkPlugin\CPT\Field;


use FTM\FreethinkPlugin\CPT\Challenge\Challenge;
use FTM\FreethinkPlugin\CPT\Organization\Organization;
use FTM\FreethinkPlugin\CPT\Person\Person;
use FTM\FreethinkPlugin\CPT\Section\Section;

/**
 * Class Post Meta
 */
class Post_Meta {

	protected $container;

	public function hooks() {
		add_action('acf/init', [ $this, 'my_acf_init' ] );
		add_action( 'acf/render_field/key=related_fields_tax', [ $this, 'render_field_related_fields_tax' ] );
	}

	public function render_field_related_fields_tax( $field ) {
		if ( did_action('acf/render_field/key=related_fields_tax') % 2 === 0 ) {
		 	return;
		}
		echo '<p><a href="/wp-admin/post-new.php?post_type=ftm_field" target="_blank">Create new field</a></p>';
	}

	public function my_acf_init() {
		$this->add_fields();
	}

	public function add_fields() {

		acf_add_local_field_group(array(
			'key' => 'group_field_info',
			'title' => 'Connections to Other Content',
			'fields' => array (
				// Bidirectional
				array (
					'key' => 'field_related_fields',
					'label' => 'Related Fields',
					'name' => 'related_fields',
					'type' => 'post_object',
					'placeholder' => 'Add related fields here',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Field::NAME
					],
					'filters' => [
						'search'
					],
				),

				// Bidirectional
				array (
					'key' => 'field_field_related_challenges_fields',
					'label' => 'Related Challenges',
					'name' => 'related_challenges_fields',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Challenge::NAME
					],
					'filters' => [
						'search'
					],
				),

				// Bidirectional
				array (
					'key' => 'field_field_related_profiles_fields',
					'label' => 'Related Profiles',
					'name' => 'related_profiles_fields',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Organization::NAME,
						Person::NAME
					],
					'filters' => [
						'search'
					],
				),

				// Bidirectional
				array (
					'key' => 'field_field_related_sections_fields',
					'label' => 'Related Section',
					'name' => 'related_sections_fields',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Section::NAME,
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
						'value' => Field::NAME    ,
					),
				),
			),
		));

	}

}
