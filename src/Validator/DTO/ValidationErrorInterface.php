<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Validator\DTO;

/**
 * Parent validation error interface.
 *
 * @see \HypnoTox\Abyss\Validator\DTO\ValidationError\*
 */
interface ValidationErrorInterface
{
    /**
     * Return array representation.
     */
    public function toArray(): array;
}
