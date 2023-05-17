<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Constraint;

use HypnoTox\Abyss\Constraint\Exception\ConstraintException;
use HypnoTox\Abyss\Contract\ToArrayInterface;
use HypnoTox\Abyss\Schema\Node\NodeInterface;

/**
 * @psalm-immutable
 */
interface ConstrainerInterface
{
    /**
     * @throws ConstraintException
     */
    public function constrain(array $data): void;
}
