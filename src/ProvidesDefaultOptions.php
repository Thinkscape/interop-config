<?php
/**
 * Sandro Keil (https://sandro-keil.de)
 *
 * @link      http://github.com/sandrokeil/interop-config for the canonical source repository
 * @copyright Copyright (c) 2015-2016 Sandro Keil
 * @license   http://github.com/sandrokeil/interop-config/blob/master/LICENSE.md New BSD License
 */

namespace Interop\Config;

/**
 * ProvidesDefaultOptions Interface
 *
 * Use this interface if you have default options. These options are merged with the provided options in
 * \Interop\Config\RequiresConfig::options()
 */
interface ProvidesDefaultOptions
{
    /**
     * Returns a list of default options, which are merged in \Interop\Config\RequiresConfig::options()
     *
     * @return string[] List with default options and values
     */
    public function defaultOptions();
}
