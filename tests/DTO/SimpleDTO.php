<?php

declare(strict_types=1);

namespace Tests\DTO;

final class SimpleDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
    ) {
    }
}
