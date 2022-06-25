<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use HypnoTox\Abyss\Schema\NodeInterface;

/**
 * {@inheritDoc}
 *
 * @psalm-immutable
 */
final class SchemaBuilder implements SchemaBuilderInterface
{
    public function __construct(
        private readonly SchemaInterface $schema = new Schema(),
    ) {
    }

    public static function fromArray(array $data): self
    {
        // TODO: implement parsing
        /** @var list<NodeInterface> $nodes */
        $nodes = $data;
        $schema = new Schema($nodes);

        return new self($schema);
    }

    public function getSchema(): SchemaInterface
    {
        return $this->schema;
    }
}
