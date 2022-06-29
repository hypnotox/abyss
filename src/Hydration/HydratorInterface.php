<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Hydration;

/**
 * @internal
 */
interface HydratorInterface
{
    public function hydrate(): object;
}
