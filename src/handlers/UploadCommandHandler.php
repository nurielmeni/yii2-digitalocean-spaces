<?php

namespace nurielmeni\spaces\handlers;

use nurielmeni\spaces\commands\UploadCommand;
use nurielmeni\spaces\base\handlers\Handler;
use GuzzleHttp\Psr7\Utils as GuzzleHttpUtils;
use Psr\Http\Message\StreamInterface;

/**
 * Class UploadCommandHandler
 *
 * @package nurielmeni\spaces\handlers
 */
final class UploadCommandHandler extends Handler
{
    /**
     * @param \nurielmeni\spaces\commands\UploadCommand $command
     *
     * @return \Aws\ResultInterface|\GuzzleHttp\Promise\PromiseInterface
     */
    public function handle(UploadCommand $command)
    {
        $source = $this->sourceToStream($command->getSource());
        $options = array_filter($command->getOptions());

        $promise = $this->s3Client->uploadAsync(
            $command->getSpace(),
            $command->getFilename(),
            $source,
            $command->getAcl(),
            $options
        );

        return $command->isAsync() ? $promise : $promise->wait();
    }

    /**
     * Create a new stream based on the input type.
     *
     * @param resource|string|StreamInterface $source path to a local file, resource or stream
     *
     * @return StreamInterface
     */
    protected function sourceToStream($source): StreamInterface
    {
        if (is_string($source)) {
            $source = GuzzleHttpUtils::tryFopen($source, 'r+');
        }

        return GuzzleHttpUtils::streamFor($source);
    }
}
