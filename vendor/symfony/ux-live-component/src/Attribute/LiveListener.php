<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\UX\LiveComponent\Attribute;

/**
 * @experimental
 */
#[\Attribute(\Attribute::TARGET_METHOD)]
class LiveListener extends LiveAction
{
    public function __construct(private string $eventName)
    {
    }

    public function getEventName(): string
    {
        return $this->eventName;
    }
}
