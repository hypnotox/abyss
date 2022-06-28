<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Constraint;

use HypnoTox\Abyss\Constraint\Exception\ConstraintException;
use HypnoTox\Abyss\Schema\Schema;

/**
 * @internal
 * @psalm-immutable
 */
interface ConstrainerInterface
{
    public function __construct(Schema $schema, array $data);

    /**
     * @throws ConstraintException
     */
    public function constrain(): void;
}
