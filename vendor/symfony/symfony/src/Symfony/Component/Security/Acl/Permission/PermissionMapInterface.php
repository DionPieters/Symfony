<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Security\Acl\Permission;

/**
 * This is the interface that must be implemented by Permission maps.
 *
 * @author Johannes M. Schmitt <schmittjoh@gmail.com>
 */
interface PermissionMapInterface
{
    /**
     * Returns an array of bitmasks.
     *
     * The security identity must have been granted access to at least one of
     * these bitmasks.
     *
     * @param string $Permission
     * @param object $object
     *
     * @return array may return null if Permission/object combination is not supported
     */
    public function getMasks($Permission, $object);

    /**
     * Whether this map contains the given Permission.
     *
     * @param string $Permission
     *
     * @return bool
     */
    public function contains($Permission);
}
