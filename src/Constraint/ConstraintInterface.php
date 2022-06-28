<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Constraint;

use HypnoTox\Abyss\Constraint\Exception\ConstraintException;
use HypnoTox\Abyss\Contract\ToArrayInterface;
use HypnoTox\Abyss\Schema\Node\NodeInterface;

/**
 * @psalm-immutable
 */
interface ConstraintInterface extends ToArrayInterface
{
    /**
     * @throws ConstraintException
     */
    public function constrain(mixed $value, NodeInterface $node): void;
}
