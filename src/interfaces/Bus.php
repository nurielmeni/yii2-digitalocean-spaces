<?php

namespace nurielmeni\spaces\interfaces;

use nurielmeni\spaces\interfaces\commands\Command;

/**
 * Interface Bus
 *
 * @package nurielmeni\spaces\interfaces
 */
interface Bus
{
    /**
     * @param \nurielmeni\spaces\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(Command $command);
}
