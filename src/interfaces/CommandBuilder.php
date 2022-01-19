<?php

namespace nurielmeni\spaces\interfaces;

use nurielmeni\spaces\interfaces\commands\Command;

/**
 * Interface CommandBuilder
 *
 * @package nurielmeni\spaces\interfaces
 */
interface CommandBuilder
{
    /**
     * @param string $commandClass
     *
     * @return \nurielmeni\spaces\interfaces\commands\Command
     */
    public function build(string $commandClass): Command;
}
