<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema;

use HypnoTox\Abyss\Schema\Enum\KeyType;
use HypnoTox\Abyss\Schema\Enum\ValueType;

/**
 * A single node of a schema.
 *
 * @internal
 * @psalm-immutable
 */
interface NodeInterface
{
    public function getKeyType(): KeyType;

    public function getValueType(): ValueType;

    /**
     * @return list<self>
     */
    public function getChildren(): array;

    public function toArray(): array;
}
