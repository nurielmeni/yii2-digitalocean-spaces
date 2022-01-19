<?php

namespace nurielmeni\spaces\base\commands\traits;

/**
 * Trait Async
 *
 * @package nurielmeni\spaces\base\commands\traits
 */
trait Async
{
    /** @var bool */
    private $isAsync = false;

    /**
     * @return $this
     */
    final public function async()
    {
        $this->isAsync = true;

        return $this;
    }

    /**
     * @return bool
     */
    final public function isAsync(): bool
    {
        return $this->isAsync;
    }
}
