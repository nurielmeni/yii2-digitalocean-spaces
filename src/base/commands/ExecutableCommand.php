<?php

namespace nurielmeni\spaces\base\commands;

use nurielmeni\spaces\interfaces\Bus;
use nurielmeni\spaces\interfaces\commands\ExecutableCommand as ExecutableCommandInterface;

/**
 * Class ExecutableCommand
 *
 * @package nurielmeni\spaces\base\commands
 */
abstract class ExecutableCommand implements ExecutableCommandInterface
{
    /** @var \nurielmeni\spaces\interfaces\Bus */
    private $bus;

    /**
     * ExecutableCommand constructor.
     *
     * @param \nurielmeni\spaces\interfaces\Bus $bus
     */
    public function __construct(Bus $bus)
    {
        $this->bus = $bus;
    }

    /**
     * @return mixed
     */
    public function execute()
    {
        return $this->bus->execute($this);
    }
}
