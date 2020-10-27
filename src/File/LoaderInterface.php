<?php
/**
 * Interface for loading files, assets and views.
 *
 * @since      0.1.0
 * @author     graemehoffman
 * @license    GNU General Public License 2.0+
 */

namespace FTM\FreethinkPlugin\File;

use Exception;

interface LoaderInterface
{

    /**
     * Load a file
     *
     * @since  0.2.0
     * @param  string    $file     The direct path and filename of the file to be loaded
     * @return                     The contents of the file
     */
    public static function loadFile($file);

    /**
     * Load a view file or asset that requires output buffering
     *
     * @since  0.2.0
     * @param  string    $file     The direct path and filename of the file to be loaded
     * @return string              The contents of the file
     */
    public static function loadOutputFile($file);

}
