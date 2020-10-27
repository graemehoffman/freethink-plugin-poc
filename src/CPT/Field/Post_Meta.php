<?php


namespace FTM\FreethinkPlugin\CPT\Field;


use FTM\FreethinkPlugin\CPT\Field\Field;
use FTM\FreethinkPlugin\CPT\Challenge\Challenge;

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
			'title' => 'Related Info',
			'fields' => array (
				array (
					'key' => 'related_fields_tax',
					'label' => 'Related Fields',
					'name' => 'related_fields_tax',
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
				array (
					'key' => 'related_challenges_tax',
					'label' => 'Related Challenges',
					'name' => 'related_challenges_tax',
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
