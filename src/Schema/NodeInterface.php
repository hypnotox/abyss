<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema;

use HypnoTox\Abyss\Schema\Enum\KeyType;
use HypnoTox\Abyss\Schema\Enum\ValueType;

/**
 * @internal
 * @psalm-immutable
 */
interface NodeInterface
{
    public function getKeyType(): KeyType;

    public function getValueType(): ValueType;
}
