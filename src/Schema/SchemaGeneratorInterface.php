<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema;

/**
 * @psalm-immutable
 */
interface SchemaGeneratorInterface
{
    /**
     * @param class-string $class
     */
    public static function generate(string $class): Schema;
}
