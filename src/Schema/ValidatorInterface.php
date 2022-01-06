<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema;

use HypnoTox\Abyss\ValidationResultInterface;

interface ValidatorInterface
{
    public function __construct(array $schema);

    public function validate(): ValidationResultInterface;
}
