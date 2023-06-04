<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\LiveComponent\Hydration;

interface HydrationExtensionInterface
{
    public function supports(string $className): bool;

    public function hydrate(mixed $value, string $className): ?object;

    /**
     * Returns a scalar value that can be used to hydrate the object later.
     */
    public function dehydrate(object $object): mixed;
}
