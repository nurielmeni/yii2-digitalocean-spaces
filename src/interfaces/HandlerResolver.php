<?php

namespace nurielmeni\spaces\interfaces;

use nurielmeni\spaces\interfaces\commands\Command;
use nurielmeni\spaces\interfaces\handlers\Handler;

/**
 * Interface HandlerResolver
 *
 * @package nurielmeni\spaces\interfaces
 */
interface HandlerResolver
{
    /**
     * @param \nurielmeni\spaces\interfaces\commands\Command $command
     *
     * @return \nurielmeni\spaces\interfaces\handlers\Handler
     */
    public function resolve(Command $command): Handler;

    /**
     * @param string $commandClass
     * @param mixed  $handler
     */
    public function bindHandler(string $commandClass, $handler);
}
