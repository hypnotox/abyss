<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema;

class Builder implements BuilderInterface
{
    public function __construct(
        private array $schema,
    ) {
    }

    public function getSchema(): array
    {
        return $this->schema;
    }
}
