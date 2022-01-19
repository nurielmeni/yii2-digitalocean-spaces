<?php

namespace nurielmeni\spaces\commands;

use Aws\ResultInterface;
use nurielmeni\spaces\base\commands\ExecutableCommand;
use nurielmeni\spaces\base\commands\traits\Async;
use nurielmeni\spaces\interfaces\commands\Asynchronous;
use nurielmeni\spaces\interfaces\commands\HasSpace;
use nurielmeni\spaces\interfaces\commands\PlainCommand;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Class RestoreCommand
 *
 * @method ResultInterface|PromiseInterface execute()
 *
 * @package nurielmeni\spaces\commands
 */
class RestoreCommand extends ExecutableCommand implements PlainCommand, HasSpace, Asynchronous
{
    use Async;

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
    public function getFilename(): string
    {
        return $this->args['Key'] ?? '';
    }

    /**
     * @param string $filename
     *
     * @return $this
     */
    public function byFilename(string $filename)
    {
        $this->args['Key'] = $filename;

        return $this;
    }

    /**
     * @return int lifetime of the active copy in days
     */
    public function getLifetime(): int
    {
        return $this->args['Days'] ?? 0;
    }

    /**
     * @param int $days lifetime of the active copy in days
     *
     * @return $this
     */
    public function withLifetime(int $days)
    {
        $this->args['Days'] = $days;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersionId(): string
    {
        return $this->args['VersionId'] ?? '';
    }

    /**
     * @param string $versionId
     *
     * @return $this
     */
    public function withVersionId(string $versionId)
    {
        $this->args['VersionId'] = $versionId;

        return $this;
    }

    /**
     * @internal used by the handlers
     *
     * @return string
     */
    public function getName(): string
    {
        return 'RestoreObject';
    }

    /**
     * @internal used by the handlers
     *
     * @return array
     */
    public function toArgs(): array
    {
        return $this->args;
    }
}
