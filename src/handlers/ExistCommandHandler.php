<?php

namespace nurielmeni\spaces\handlers;

use nurielmeni\spaces\base\handlers\Handler;
use nurielmeni\spaces\commands\ExistCommand;

/**
 * Class ExistCommandHandler
 *
 * @package nurielmeni\spaces\handlers
 */
final class ExistCommandHandler extends Handler
{
    /**
     * @param \nurielmeni\spaces\commands\ExistCommand $command
     *
     * @return bool
     */
    public function handle(ExistCommand $command): bool
    {
        return $this->s3Client->doesObjectExist(
            $command->getSpace(),
            $command->getFilename(),
            $command->getOptions()
        );
    }
}
