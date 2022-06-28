<?php

declare(strict_types=1);

namespace Tests\DTO;

final class SimpleArrayDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly array $data,
    ) {
    }
}
