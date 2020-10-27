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

class CPT
{
    /**
     * Register the custom post types
     *
     * @since 0.4.0
     * @return void
     */
    public static function register()
    {
        $post_types = include(plugin_dir_path(dirname(dirname(__FILE__))) . 'config/cpt.php');

        foreach ($post_types as $post_type) {
            register_post_type($post_type['id'], $post_type);
        }
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

		// var_dump($taxonomies);

		foreach ($taxonomies as $key => $taxonomy ) {
			// var_dump($key);
			register_taxonomy( $key, $taxonomy['post_types'], $taxonomy['args'] );
			// register_post_type($post_type['id'], $post_type);
		}
	}
}
