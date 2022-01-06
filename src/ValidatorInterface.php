<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use HypnoTox\Abyss\Schema\EntryInterface;

interface ValidatorInterface
{
    /**
     * @param EntryInterface[] $schema
     *
     * @throws SchemaException
     */
    public function __construct(array $schema, array $array);

    public function validate(): ValidationResultInterface;
}
