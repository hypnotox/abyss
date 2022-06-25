<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema;

use HypnoTox\Abyss\Schema\Enum\KeyType;
use HypnoTox\Abyss\Schema\Enum\ValueType;

/**
 * {@inheritDoc}
 *
 * @psalm-immutable
 */
final class Node implements NodeInterface
{
    /**
     * @param list<NodeInterface> $children
     */
    public function __construct(
        private readonly KeyType $keyType,
        private readonly ValueType $valueType,
        private readonly array $children = [],
    ) {
    }

    public function getKeyType(): KeyType
    {
        return $this->keyType;
    }

    public function getValueType(): ValueType
    {
        return $this->valueType;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function toArray(): array
    {
        return [
            'keyType'                           => $this->keyType,
            'valueType'                         => $this->valueType,
            'children'                          => array_map(
                static fn (NodeInterface $node) => $node->toArray(),
                $this->children,
            ),
        ];
    }
}
