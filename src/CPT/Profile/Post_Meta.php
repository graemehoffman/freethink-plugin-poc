<?php


namespace FTM\FreethinkPlugin\CPT\Profile;


/**
 * Class Post Meta
 *
 */
class Post_Meta {

	const FIELD_TYPE = 'div_ai_field_type';

	protected $container;

	public function hooks() {

		add_action('acf/init', [ $this, 'my_acf_init' ] );

	}

	public function my_acf_init() {
		$this->add_fields();
	}

	public function add_fields() {



	}

}
