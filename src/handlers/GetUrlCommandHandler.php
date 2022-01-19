<?php

namespace nurielmeni\spaces\handlers;

use nurielmeni\spaces\base\handlers\Handler;
use nurielmeni\spaces\commands\GetUrlCommand;

/**
 * Class GetUrlCommandHandler
 *
 * @package nurielmeni\spaces\handlers
 */
final class GetUrlCommandHandler extends Handler
{
    /**
     * @param \nurielmeni\spaces\commands\GetUrlCommand $command
     *
     * @return string
     */
    public function handle(GetUrlCommand $command): string
    {
        return $this->s3Client->getObjectUrl($command->getSpace(), $command->getFilename());
    }
}
