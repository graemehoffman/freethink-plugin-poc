<?php


namespace FTM\FreethinkPlugin\CPT\Article;

use FTM\FreethinkPlugin\Container\Container;
use FTM\FreethinkPlugin\CPT\Section\Section;
use FTM\FreethinkPlugin\CPT\Video\Video;

/**
 * Class Rewrite
 */
class Rewrite {

	/**
	 * Modifies post link for Articles
	 *
	 * @return string
	 */
	public function modify_post_type_link( $url, $post, $leavename ) {
		if ( Article::NAME === $post->post_type || Video::NAME === $post->post_type ) {
			$section = get_field( 'navigational_section', $post->ID );
			if ( !empty( $section ) ) {
				$parts = [];
				if ( !empty( $section->post_parent )  ) {
					$parent = get_post( $section->post_parent );
					$parts[] = $parent->post_name;
				}
				$parts[] = $section->post_name;
				$path = '/' . implode('/', $parts ) . '/';
				$post_link = str_replace( '/' . $post->post_type . '/', $path, $url );
				return $post_link;
			}
		}
		return $url;
	}

	/**
	 * Add rewrites for sections and subsections
	 *
	 * @return string
	 */
	public function section_article_rewrites() {
		$args = [
			'post_type' => Section::NAME
		];
		$query1 = new \WP_Query( $args );
		$posts = $query1->get_posts();
		foreach( $posts as $post ) {
			add_rewrite_rule(
				sprintf( '%s/([^/]*)/?', $post->post_name),
				'index.php?name=$matches[1]&post_type=ftm_article',
				'top'
			);

			add_rewrite_rule(
				sprintf( '%s/([^/]*)/?', $post->post_name),
				'index.php?name=$matches[1]&post_type=ftm_video',
				'top'
			);

		}
		wp_reset_postdata();
	}


}
