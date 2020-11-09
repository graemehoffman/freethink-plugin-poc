<?php


namespace FTM\FreethinkPlugin\CPT\Challenge;

use FTM\FreethinkPlugin\CPT\Field\Field;
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
				// Bidirectional
				array (
					'key' => 'field_challenge_related_challenges_fields',
					'label' => 'Related Fields',
					'name' => 'related_challenges_fields',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Field::NAME
					]
				),

				// Bidirectional
				array (
					'key' => 'field_challenge_related_challenges_profiles',
					'label' => 'Related Profiles',
					'name' => 'related_challenges_profiles',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Organization::NAME,
						Person::NAME
					]
				),

				// Bidirectional
				array (
					'key' => 'field_challenge_related_challenges_sections',
					'label' => 'Related Sections',
					'name' => 'related_challenges_sections',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Section::NAME,
					]
				),

				// Bidirectional
				array (
					'key' => 'field_related_challenges',
					'label' => 'Related Challenges',
					'name' => 'related_challenges',
					'type' => 'post_object',
					'ui' => 1,
					'multiple'			=> 1,
					'allow_null' 		=> 1,
					'post_type' => [
						Challenge::NAME,
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
