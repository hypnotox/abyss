<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema;

use HypnoTox\Abyss\Contract\ToArrayInterface;
use HypnoTox\Abyss\Schema\Node\NodeInterface;

/**
 * @psalm-immutable
 */
interface SchemaInterface extends ToArrayInterface
{
    /**
     * @return class-string
     */
    public function getClass(): string;

    /**
     * @return list<NodeInterface>
     */
    public function getNodes(): array;
}
