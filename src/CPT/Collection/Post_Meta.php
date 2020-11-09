<?php


namespace FTM\FreethinkPlugin\CPT\Collection;

use FTM\FreethinkPlugin\CPT\Challenge\Challenge;
use FTM\FreethinkPlugin\CPT\Field\Field;
use FTM\FreethinkPlugin\CPT\Organization\Organization;
use FTM\FreethinkPlugin\CPT\Person\Person;
use FTM\FreethinkPlugin\CPT\Collection\Collection;

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

	public function add_fields() {

		acf_add_local_field_group(array(
			'key' => 'group_profile_1',
			'title' => 'Profile Relationships',
			'fields' => array (
				array (
					'key' => 'field_related_fields',
					'label' => 'Related Fields',
					'name' => 'related_fields',
					'type' => 'relationship',
					'filters' => [
						'search'
					],
					'post_type' => [
						Field::NAME
					]
				),
				array (
					'key' => 'field_related_challenges',
					'label' => 'Related Challenges',
					'name' => 'related_challenges',
					'type' => 'relationship',
					'filters' => [
						'search'
					],
					'post_type' => [
						Challenge::NAME
					]
				),
				array (
					'key' => 'field_related_profiles',
					'label' => 'Related Profiles',
					'name' => 'related_profiles',
					'type' => 'relationship',
					'filters' => [
						'search'
					],
					'post_type' => [
						Person::NAME,
						Organization::NAME
					]
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => Collection::NAME    ,
					),
				),
			),
		));


	}


}
