<?php

declare(strict_types=1);

namespace Tests\DTO;

use HypnoTox\Abyss\Schema;

/**
 * @internal
 */
final class SchemaDTO
{
    public function __construct(
        public readonly Schema $schema,
        public readonly array $data,
    ) {
    }
}
