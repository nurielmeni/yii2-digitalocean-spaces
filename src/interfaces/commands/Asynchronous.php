<?php

namespace nurielmeni\spaces\interfaces\commands;

/**
 * Interface Asynchronous
 *
 * @package nurielmeni\spaces\interfaces\commands
 */
interface Asynchronous
{
    /**
     * @return mixed
     */
    public function async();

    /**
     * @return bool
     */
    public function isAsync(): bool;
}
