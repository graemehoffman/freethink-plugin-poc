<?php
/**
 * Plugin requirements parameters.
 *
 * @package    FTM\FreethinkPlugin
 * @since      0.1.0
 * @author     graemehoffman
 * @license    GNU General Public License 2.0+
 */

return array(

 /*********************************************************
 * Plugin constants to define
 *
 * Format:
 *    $unique_id => $value
 ********************************************************/

    'PLUGIN_ROOT'            => FTM\FreethinkPlugin\Utils\PluginData::root(),
    'PLUGIN_NAME'            => FTM\FreethinkPlugin\Utils\PluginData::headerData('Name'),
    'PLUGIN_BASENAME'        => FTM\FreethinkPlugin\Utils\PluginData::basename(),
    'PLUGIN_DIR_PATH'        => FTM\FreethinkPlugin\Utils\Paths::pluginDir(),
    'PLUGIN_DIR_URL'         => FTM\FreethinkPlugin\Utils\URLs::dirURL(),
    'PLUGIN_TEXT_DOMAIN'     => FTM\FreethinkPlugin\Utils\PluginData::headerData('TextDomain'),
    'PLUGIN_VERSION'         => FTM\FreethinkPlugin\Utils\PluginData::headerData('Version'),
	'DOCUMENTATION_SITE_URL' => 'https://freethink.com/',
);
