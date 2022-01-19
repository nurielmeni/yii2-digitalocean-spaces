<?php

namespace nurielmeni\spaces\interfaces\commands;

/**
 * Interface HasAcl
 *
 * @package nurielmeni\spaces\interfaces\commands
 */
interface HasAcl
{
    /**
     * @param string $acl
     */
    public function withAcl(string $acl);
}
