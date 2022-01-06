<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

interface ValidationResultInterface
{
    public function __construct(array $errors);

    public function isValid(): bool;

    public function getErrors(): array;
}
