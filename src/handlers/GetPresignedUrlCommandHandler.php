<?php

namespace nurielmeni\spaces\handlers;

use nurielmeni\spaces\base\handlers\Handler;
use nurielmeni\spaces\commands\GetPresignedUrlCommand;

/**
 * Class GetPresignedUrlCommandHandler
 *
 * @package nurielmeni\spaces\handlers
 */
final class GetPresignedUrlCommandHandler extends Handler
{
    /**
     * @param \nurielmeni\spaces\commands\GetPresignedUrlCommand $command
     *
     * @return string
     */
    public function handle(GetPresignedUrlCommand $command): string
    {
        $awsCommand = $this->s3Client->getCommand('GetObject', $command->getArgs());
        $request = $this->s3Client->createPresignedRequest($awsCommand, $command->getExpiration());

        return (string)$request->getUri();
    }
}
