<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Schema;

use HypnoTox\Abyss\ValidationResultInterface;

final class Validator implements ValidatorInterface
{
    private ValidationResultInterface|null $result = null;

    /**
     * @var Entry[]
     */
    private readonly array $schemaSchema;

    public function __construct(
        private readonly array $schema,
    ) {
        $this->schemaSchema = [
            new Entry(),
        ];
    }

    public function validate(): ValidationResultInterface
    {
        if (!$this->result) {
            $this->result = (new \HypnoTox\Abyss\Validator(
                $this->schemaSchema,
                $this->schema,
            ))->validate();
        }

        return $this->result;
    }
}
