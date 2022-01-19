<?php

namespace nurielmeni\spaces\interfaces\commands;

/**
 * Interface HasSpace
 *
 * @package nurielmeni\spaces\interfaces\commands
 */
interface HasSpace
{
    /**
     * @param string $name
     */
    public function inSpace(string $name);
}
