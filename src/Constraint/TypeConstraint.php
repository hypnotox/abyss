<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Constraint;

use HypnoTox\Abyss\Constraint\Config\TypeConstraintConfig;
use HypnoTox\Abyss\Constraint\Enum\Type;
use HypnoTox\Abyss\Constraint\Exception\ConstraintException;
use HypnoTox\Abyss\Schema\Node\NodeInterface;

/**
 * @psalm-immutable
 */
final class TypeConstraint implements ConstraintInterface
{
    /**
     * @param list<TypeConstraintConfig> $configurations
     */
    public function __construct(
        private readonly array $configurations
    ) {
    }

    /**
     * {@inheritDoc}
     */
    public function constrain(mixed $value, NodeInterface $node): void
    {
        foreach ($this->configurations as $configuration) {
            switch ($configuration->type) {
                case Type::INT:
                    if (\is_int($value)) {
                        return;
                    }

                    break;
                case Type::STRING:
                    if (\is_string($value)) {
                        return;
                    }

                    break;
                case Type::ARRAY:
                    if (\is_array($value)) {
                        return;
                    }

                    break;
                case Type::LIST:
                    if (\is_array($value) && array_is_list($value)) {
                        return;
                    }

                    break;
                case Type::OBJECT:
                    if (\is_object($value)) {
                        return;
                    }

                    break;
                case Type::SCHEMA:
                    if ($value instanceof $configuration->config['class']) {
                        return;
                    }

                    break;
            }
        }

        throw new ConstraintException(
            $node,
            $this,
        );
    }

    public function toArray(): array
    {
        /**
         * @psalm-var pure-callable $callback
         *
         * @var callable $callback
         * @noinspection PhpUndefinedClassInspection
         * @noinspection PhpDocSignatureInspection
         */
        $callback = static fn (TypeConstraintConfig $config): array => $config->toArray();

        return array_map(
            $callback,
            $this->configurations,
        );
    }
}
