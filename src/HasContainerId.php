<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/interop-config for the canonical source repository
 * @copyright Copyright (c) 2015 Sandro Keil
 * @license   http://github.com/sandrokeil/interop-config/blob/master/LICENSE.txt New BSD License
 */

namespace Interop\Config;

/**
 * HasContainerId Interface
 *
 * Use this interface if a configuration uses a container id.
 */
interface HasContainerId extends HasConfig
{
    /**
     * Returns the container identifier
     *
     * @return string
     */
    public function containerId();
}
