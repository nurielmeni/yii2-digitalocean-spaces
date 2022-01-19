<?php

namespace nurielmeni\spaces\interfaces;

use nurielmeni\spaces\interfaces\commands\Command;

/**
 * Interface Service
 *
 * @package nurielmeni\spaces\interfaces
 */
interface Service
{
    /**
     * @param \nurielmeni\spaces\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);

    /**
     * @param string $commandClass
     *
     * @return \nurielmeni\spaces\interfaces\commands\Command
     */
    public function create(string $commandClass): Command;
}
