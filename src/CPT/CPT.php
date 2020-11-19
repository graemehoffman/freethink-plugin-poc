<?php
/**
 * Class for registering WordPress custom post types
 *
 * @package    FTM\FreethinkPlugin\CPT
 * @since      0.4.0
 * @author     graemehoffman
 * @license    GNU General Public License 2.0+
 */

namespace FTM\FreethinkPlugin\CPT;

use FTM\FreethinkPlugin\CPT\Challenge\Challenge;
use FTM\FreethinkPlugin\CPT\Article\Article;
use FTM\FreethinkPlugin\CPT\Field\Field;
use FTM\FreethinkPlugin\CPT\Organization\Organization;
use FTM\FreethinkPlugin\CPT\Person\Person;
use FTM\FreethinkPlugin\CPT\Collection\Collection;
use FTM\FreethinkPlugin\CPT\Section\Section;
use FTM\FreethinkPlugin\CPT\Video\Video;
use FTM\FreethinkPlugin\CPT\Sponsor\Sponsor;
use FTM\FreethinkPlugin\Plugin;

class CPT
{
	/**
	 * Register the custom post types
	 *
	 * @return void
	 */
	public static function register()
	{
		register_post_type(Article::NAME, Article::get_register_cpt_args() );
		register_post_type(Challenge::NAME, Challenge::get_register_cpt_args() );
		register_post_type(Field::NAME, Field::get_register_cpt_args() );
		register_post_type(Person::NAME, Person::get_register_cpt_args() );
		register_post_type(Organization::NAME, Organization::get_register_cpt_args() );
		register_post_type(Collection::NAME, Collection::get_register_cpt_args() );
		register_post_type(Section::NAME, Section::get_register_cpt_args() );
		register_post_type(Video::NAME, Video::get_register_cpt_args() );
		register_post_type(Sponsor::NAME, Sponsor::get_register_cpt_args() );
	}

	/**
	 * Register taxonomies
	 *
	 * @since 0.4.0
	 * @return void
	 */
	public static function taxonomy()
	{
		$taxonomies = include(plugin_dir_path(dirname(dirname(__FILE__))) . 'config/taxonomy.php');

		foreach ($taxonomies as $key => $taxonomy ) {
			register_taxonomy( $key, $taxonomy['post_types'], $taxonomy['args'] );
		}
	}
}
