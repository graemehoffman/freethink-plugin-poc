<?php


namespace FTM\FreethinkPlugin\CPT\Challenge;


/**
 * Class Post Meta
 */
class Post_Meta {

	const FIELD_TYPE = 'div_ai_field_type';

	protected $container;

	public function hooks() {
		// add_action( 'carbon_fields_register_fields', [ $this, 'add_post_meta' ], 3, 0 );
	}

	public function add_post_meta()
	{
		$this->add_permanent_fields();
	}

	public function add_permanent_fields()
	{


	}

}
