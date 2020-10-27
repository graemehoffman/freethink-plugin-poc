<?php
/**
 * Class that defines the plugin's constants.
 *
 */
namespace FTM\FreethinkPlugin\Constants;

use FTM\FreethinkPlugin\Config\ConfigInterface;
use FTM\FreethinkPlugin\Utils\PluginData;

class Constants implements ConstantsInterface
{

    /**
     * The configuration parameters
     *
     * @var ConfigInterface    $config    Plugin configuration parameters
     */
    public $constants_config = array();

    /**
     * Constructor
     *
     * @since  0.1.0
     */
    public function __construct(ConfigInterface $constants_config)
    {
        $this->constants_config = $constants_config;
    }

    /**
     * Defines the plugin's constants
     *
     * @since  0.1.0
     */
    public function define()
    {
        foreach ($this->constants_config as $constant => $value) {
            if (! defined(PluginData::topLevelNamespace() . "\\{$constant}")) {
                define(PluginData::topLevelNamespace() . "\\{$constant}", $value);
            }
        }
    }

    /**
     * Add additional constants to the default constants array
     *
     * @since 0.1.0
     * @return array    $this->constants_config    The plugin constants
     */
    public function add(array $constants)
    {
        $this->constants_config = array_merge($this->constants_config, $constants);

        return $this;
    }

    /**
     * Get the array of constants
     * @since  0.1.0
     * @return array    $this->constants    Plugin constants
     */
    public function getConstants()
    {
        return $this->constants_config;
    }
}
