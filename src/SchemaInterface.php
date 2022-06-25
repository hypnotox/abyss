<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use HypnoTox\Abyss\Schema\NodeInterface;

/**
 * Will be built by the SchemaBuilder in most instances.
 *
 * @see SchemaBuilderInterface
 *
 * @psalm-immutable
 */
interface SchemaInterface
{
    /**
     * @param list<NodeInterface> $nodes
     */
    public function __construct(array $nodes = []);

    /**
     * Returns node list.
     *
     * @return list<NodeInterface>
     */
    public function getNodes(): array;

    /**
     * Transforms node list into array representation and returns it.
     */
    public function toArray(): array;
}
