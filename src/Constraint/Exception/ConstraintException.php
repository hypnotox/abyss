<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Constraint\Exception;

use HypnoTox\Abyss\Constraint\ConstraintInterface;
use HypnoTox\Abyss\Schema\Node\NodeInterface;

/**
 * @psalm-external-mutation-free
 */
final class ConstraintException extends \Exception
{
    public function __construct(
        public readonly NodeInterface $node,
        public readonly ConstraintInterface $constraint,
        public readonly array $messages = [],
        int $code = 0,
        ?\Throwable $previous = null,
    ) {
        parent::__construct('Constraint Error: '.$constraint::class, $code, $previous);
    }
}
