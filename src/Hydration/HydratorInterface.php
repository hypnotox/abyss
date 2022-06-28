<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Hydration;

interface HydratorInterface
{
    /**
     * @param class-string $class
     */
    public static function hydrate(string $class, array $data): object;
}
