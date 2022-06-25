<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use HypnoTox\Abyss\Schema\NodeInterface;

/**
 * {@inheritDoc}
 *
 * @psalm-immutable
 */
final class Schema implements SchemaInterface
{
    /**
     * @param list<NodeInterface> $nodes
     */
    public function __construct(
        private readonly array $nodes = [],
    ) {
    }

    public function getNodes(): array
    {
        return $this->nodes;
    }

    public function toArray(): array
    {
        return array_map(
            static fn (NodeInterface $node) => $node->toArray(),
            $this->nodes,
        );
    }
}
