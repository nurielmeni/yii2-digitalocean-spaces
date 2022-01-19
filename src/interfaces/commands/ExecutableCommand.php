<?php

namespace nurielmeni\spaces\interfaces\commands;

/**
 * Interface ExecutableCommand
 *
 * @package nurielmeni\spaces\interfaces\commands
 */
interface ExecutableCommand extends Command
{
    /**
     * @return mixed
     */
    public function execute();
}
