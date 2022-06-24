<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use HypnoTox\Abyss\Schema\NodeInterface;

final class SchemaBuilder implements SchemaBuilderInterface
{
    /**
     * @param list<NodeInterface> $schema
     */
    public function __construct(
        private readonly array $schema,
    ) {
    }

    public static function fromArray(array $schema): self
    {
        // TODO: implement parsing
        /** @var list<NodeInterface> $schema */
        return new self($schema);
    }

    public function getSchema(): array
    {
        return $this->schema;
    }
}
