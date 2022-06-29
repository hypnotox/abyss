<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema;

/**
 * @internal
 */
interface SchemaGeneratorInterface
{
    /**
     * @param class-string $class
     */
    public function generate(string $class): Schema;
}
