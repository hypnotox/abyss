<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema\Node;

use HypnoTox\Abyss\Constraint\ConstraintInterface;
use HypnoTox\Abyss\Contract\ToArrayInterface;

/**
 * A single node of a schema.
 *
 * @psalm-immutable
 */
interface NodeInterface extends ToArrayInterface
{
    public function getKey(): string;

    public function getParent(): self|null;

    /**
     * @return list<ConstraintInterface>
     */
    public function getConstraints(): array;

    /**
     * @return list<NodeInterface>
     */
    public function getChildren(): array;

    public function getValueFromData(array $data): mixed;
}
