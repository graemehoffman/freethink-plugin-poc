<?php
/**
 * The core plugin class.
 *
 * @package    FTM\FreethinkPlugin
 * @since      0.1.0
 * @author     graemehoffman
 * @license    GNU General Public License 2.0+
 */

namespace FTM\FreethinkPlugin;

use FTM\FreethinkPlugin\Config\Config;
use FTM\FreethinkPlugin\Container\Container;


final class Plugin
{

    /**
     * Container instance
     * @var Container
     */
    public $container;

    /**
     * The plugin root file
     *
     * @var string
     */
    public $plugin_root_file;

    /**
     * The plugin top level namespace
     *
     * @var string
     */
    public $namespace;

    /**
     * Flag to track if the plugin is loaded.
     *
     * @var bool
     */
    private $loaded = false;

    /**
     * Constructor.
     *
     * @since 0.1.0
     * @param string    plugin_root_folder    Root folder of the plugin
     */
    public function __construct(Container $container, $plugin_root_file)
    {
        $this->container = $container;
        $this->plugin_root_file = $plugin_root_file;
        $this->namespace = __NAMESPACE__;
    }

    /**
     * Add default services to our Container
     *
     * @since 0.2.0
     */
    public function registerServices()
    {
        $service_providers = $this->container->get('service-providers-config')->config;

        foreach ($service_providers as $key => $value) {
            $args = [];

            if (array_key_exists('dependencies', $value)) {
                $args = $this->filterDependencies($value['dependencies']);
            }

            if (array_key_exists('params', $value)) {
                $args = array_merge($args, $value['params']);
            }

            if (!empty($args)) {
                $this->container->set($key, new $value['class'](...$args));
            } else {
                $this->container->set($key, new $value['class']());
            }
        }

        return $this;
    }

    protected function filterDependencies(array $dependencies)
    {
        foreach ($dependencies as $key => $value) {
            if ($value == 'container') {
                $dependencies[$key] = $this->container;
                continue;
            }
            $dependencies[$key] = $this->container->get($value);
        }

        return $dependencies;
    }

    /**
     * Initialize the plugin. Executes all initial tasks necessary to prepare the plugin to perform its objective(s).
     *
     * @since  0.1.0
     * @return object   $this   Instance of this object.
     */
    public function init()
    {
        if ($this->loaded) {
            return;
        }

        $this->registerConfigs();
        $this->registerServices();
        $this->container->get('constants')->define();

	    $this->container->get('cpt_controller')->addCustomPostTypes();

	    $this->container->get('admin.dashboard')->hooks();

	    $this->container->get('post_types.profiles.post_meta')->hooks();
	    $this->container->get('post_types.narratives.post_meta')->hooks();
	    $this->container->get('post_types.sections.post_meta')->hooks();
	    $this->container->get('post_types.fields.post_meta')->hooks();
	    $this->container->get('post_types.challenges.post_meta')->hooks();
	    $this->container->get('post_types.collections.post_meta')->hooks();

	    $this->loaded = true;

        return $this;
    }

    /**
     * Register and instantiate the plugin configuration objects
     *
     * @since 0.3.0
     * @return void
     */
    protected function registerConfigs()
    {
        $config_dir_path = plugin_dir_path($this->plugin_root_file) . 'config/';
        $config_dir = scandir($config_dir_path);

        $config_files = $this->filterConfigDir($config_dir);

        foreach ($config_files as $config_id => $config_file) {
            $config_file = $config_dir_path . $config_file;
            $this->container->set($config_id . '-config', new Config($config_file));
        }

        return $this;
    }

    protected function filterConfigDir($config_dir)
    {
        foreach ($config_dir as $key => $value) {
            if (in_array($value, array('.','..','index.php')) || strpos($value, '.php') == false) {
                unset($config_dir[$key]);
            }
        }

	    $config = [];
        foreach ($config_dir as $config_file) {
            $config_id = str_replace('.php', '', $config_file);
            $config[$config_id] = $config_file;
        }

        return $config;
    }
}
