<?php

namespace nurielmeni\spaces;

use nurielmeni\spaces\interfaces;

/**
 * Class Bus
 *
 * @package nurielmeni\spaces
 */
class Bus implements interfaces\Bus
{
    /** @var interfaces\HandlerResolver */
    protected $resolver;

    /**
     * Bus constructor.
     *
     * @param \nurielmeni\spaces\interfaces\HandlerResolver $inflector
     */
    public function __construct(interfaces\HandlerResolver $inflector)
    {
        $this->resolver = $inflector;
    }

    /**
     * @param \nurielmeni\spaces\interfaces\commands\Command $command
     *
     * @return mixed
     */
    public function execute(interfaces\commands\Command $command)
    {
        $handler = $this->resolver->resolve($command);

        return call_user_func([$handler, 'handle'], $command);
    }
}
