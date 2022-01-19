<?php

namespace nurielmeni\spaces\commands;

use nurielmeni\spaces\base\commands\ExecutableCommand;
use nurielmeni\spaces\base\commands\traits\Options;
use nurielmeni\spaces\interfaces\commands\HasSpace;

/**
 * Class ExistCommand
 *
 * @method bool execute()
 *
 * @package nurielmeni\spaces\commands
 */
class ExistCommand extends ExecutableCommand implements HasSpace
{
    use Options;

    /** @var string */
    protected $space;

    /** @var string */
    protected $filename;

    /**
     * @return string
     */
    public function getSpace(): string
    {
        return (string)$this->space;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function inSpace(string $name)
    {
        $this->space = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return (string)$this->filename;
    }

    /**
     * @param string $filename
     *
     * @return $this
     */
    public function byFilename(string $filename)
    {
        $this->filename = $filename;

        return $this;
    }
}
