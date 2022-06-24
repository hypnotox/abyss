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
class Node implements NodeInterface
{
    public function __construct(
        private readonly KeyType $keyType,
        private readonly ValueType $valueType,
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
}
