<?php

namespace nurielmeni\spaces\commands;

use Aws\ResultInterface;
use nurielmeni\spaces\base\commands\ExecutableCommand;
use nurielmeni\spaces\base\commands\traits\Async;
use nurielmeni\spaces\base\commands\traits\Options;
use nurielmeni\spaces\interfaces\commands\Asynchronous;
use nurielmeni\spaces\interfaces\commands\HasSpace;
use nurielmeni\spaces\interfaces\commands\PlainCommand;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Class ListCommand
 *
 * @method ResultInterface|PromiseInterface execute()
 *
 * @package nurielmeni\spaces\commands
 */
class ListCommand extends ExecutableCommand implements PlainCommand, HasSpace, Asynchronous
{
    use Async;
    use Options;

    /** @var array */
    protected $args = [];

    /**
     * @return string
     */
    public function getSpace(): string
    {
        return $this->args['Bucket'] ?? '';
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function inSpace(string $name)
    {
        $this->args['Bucket'] = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getPrefix(): string
    {
        return $this->args['Prefix'] ?? '';
    }

    /**
     * @param string $prefix
     *
     * @return $this
     */
    public function byPrefix(string $prefix)
    {
        $this->args['Prefix'] = $prefix;

        return $this;
    }

    /**
     * @internal used by the handlers
     *
     * @return string
     */
    public function getName(): string
    {
        return 'ListObjects';
    }

    /**
     * @internal used by the handlers
     *
     * @return array
     */
    public function toArgs(): array
    {
        return array_replace($this->options, $this->args);
    }
}
