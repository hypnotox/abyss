<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema\Node;

use HypnoTox\Abyss\Constraint\ConstraintInterface;

/**
 * {@inheritDoc}
 *
 * @psalm-immutable
 */
final class Node implements NodeInterface
{
    /**
     * @param list<ConstraintInterface> $constraints
     * @param list<NodeInterface>       $children
     */
    public function __construct(
        private readonly string $key,
        private readonly array $constraints = [],
        private readonly array $children = [],
        private readonly NodeInterface|null $parent = null,
    ) {
    }

    public function getKey(): string
    {
        return $this->key;
    }

    public function getParent(): NodeInterface|null
    {
        return $this->parent;
    }

    public function getConstraints(): array
    {
        return $this->constraints;
    }

    public function getChildren(): array
    {
        return $this->children;
    }

    public function toArray(): array
    {
        /**
         * @psalm-var pure-callable $constraintCallback
         *
         * @var callable $constraintCallback
         * @noinspection PhpUndefinedClassInspection
         * @noinspection PhpDocSignatureInspection
         */
        $constraintCallback = static fn (ConstraintInterface $constraint): array => $constraint->toArray();
        $constraints = array_map(
            $constraintCallback,
            $this->constraints,
        );

        /**
         * @psalm-var pure-callable $childCallback
         *
         * @var callable $childCallback
         * @noinspection PhpUndefinedClassInspection
         * @noinspection PhpDocSignatureInspection
         */
        $childCallback = static fn (NodeInterface $node): array => $node->toArray();
        $children = array_map(
            $childCallback,
            $this->children,
        );

        return [
            'key'         => $this->key,
            'constraints' => $constraints,
            'children'    => $children,
        ];
    }

    public function getValueFromData(array $data): mixed
    {
        $key = $this->getKey();

        return $data[$key] ?? null;
    }
}
