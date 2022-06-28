<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

/**
 * @psalm-immutable
 */
interface AbyssInterface
{
    /**
     * @param class-string|string $class
     */
    public static function map(string $class, array $data): object;
}
