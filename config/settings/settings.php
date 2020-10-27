<?php
/**
 * Custom WordPress administration pages and settings configuration parameters
 *
 * @package    FTM\FreethinkPlugin
 * @since      0.3.0
 * @author     graemehoffman
 * @license    GNU General Public License 2.0+
 */

return array(

    /*********************************************************
    * Top level custom admin pages
    *
    * Format:
    *   array(
    * 'page_title' => $page_title,
    * 'menu_title' => $menu_title,
    * 'capability' => $capability,
    * 'menu_slug'  => $menu_slug,
    * 'callback'   => $callback,
    * 'icon_url'   => $icon_url,
    * 'position'   => $position,
    *   ),
    ********************************************************/

    'pages' => array(

    ),

    /*********************************************************
    * Custom admin subpages
    *
    * Format:
    *   array(
    * 'parent_slug' => $parent_slug,
    * 'page_title'  => $page_title,
    * 'menu_title'  => $menu_title,
    * 'capability'  => $capability,
    * 'menu_slug'   => $menu_slug,
    * 'callback'    => $callback,
    *   ),
    *
    * The following 'parent_slug' values (case sensitive) may be used to add subpages to the default top-level WordPress settings pages:
    *
    * Dashboard : 'parent_slug' => 'Dashboard',
    * Posts     : 'parent_slug' => 'Posts',
    * Media     : 'parent_slug' => 'Media',
    * Pages     : 'parent_slug' => 'Pages',
    * Comments  : 'parent_slug' => 'Comments',
    * Appearance: 'parent_slug' => 'Appearance',
    * Plugins   : 'parent_slug' => 'Plugins',
    * Users     : 'parent_slug' => 'Users',
    * Tools     : 'parent_slug' => 'Tools',
    * Settings  : 'parent_slug' => 'Settings',
    *
    ********************************************************/

    'subpages' => array(

    ),

    /*********************************************************
    * The URL for the plugin's "Settings" link on the WordPress plugins activation page.
    *
    * By default, the "Settings" link URL will be set to the first page defined below in this configuration array. If no page is set, the URL will then default
    * to the first subpage defined below in this configuration array.
    *
    * These defaults will be overrided if a 'settings_url' is defined here.
    *
    * Format:
    * 'settings_url' => $settings_url,
    *
    ********************************************************/

   'settings_link' => 'options.php',

);
