<?php
/**
 * Constants Contract
 *
 */

namespace FTM\FreethinkPlugin\Constants;

interface ConstantsInterface
{

    /**
     * Define the plugin's constants
     *
     * @since  0.1.0
     * @return null
     */
    public function define();

    /**
     * Add additional constants to the default constants array
     *
     * @since 0.1.0
     * @return array    $this->constants    The plugin constants
     */
    public function add(array $constants);
}
