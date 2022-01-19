<?php

namespace nurielmeni\spaces\interfaces\commands;

/**
 * Interface PlainCommand
 *
 * @package nurielmeni\spaces\interfaces\commands
 */
interface PlainCommand extends Command
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return array
     */
    public function toArgs(): array;
}
