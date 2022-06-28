<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Constraint\Config;

use HypnoTox\Abyss\Constraint\Enum\Type;

/**
 * {@inheritDoc}
 *
 * @psalm-immutable
 */
final class TypeConstraintConfig implements ConstraintConfigInterface
{
    public function __construct(
        public readonly Type $type,
        public readonly array $config = [],
        public readonly string|null $class = null,
    ) {
    }

    public function toArray(): array
    {
        return [
            'type'   => $this->type,
            'config' => $this->config,
            'class'  => $this->class,
        ];
    }
}
