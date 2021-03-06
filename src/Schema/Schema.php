<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema;

use HypnoTox\Abyss\Schema\Node\NodeInterface;

/**
 * {@inheritDoc}
 *
 * @psalm-immutable
 */
final class Schema implements SchemaInterface
{
    /**
     * @param class-string        $class
     * @param list<NodeInterface> $nodes
     */
    public function __construct(
        private readonly string $class,
        private readonly array $nodes = [],
    ) {
    }

    public function getClass(): string
    {
        return $this->class;
    }

    public function getNodes(): array
    {
        return $this->nodes;
    }

    public function toArray(): array
    {
        /**
         * @psalm-var pure-callable $callback
         *
         * @var callable $callback
         * @noinspection PhpUndefinedClassInspection
         * @noinspection PhpDocSignatureInspection
         */
        $callback = static fn (NodeInterface $node): array => $node->toArray();

        return array_map(
            $callback,
            $this->nodes,
        );
    }
}
