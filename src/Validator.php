<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use HypnoTox\Abyss\Schema\EntryInterface;

final class Validator implements ValidatorInterface
{
    private ValidationResultInterface|null $result = null;

    /**
     * @param EntryInterface[] $schema
     *
     * @throws SchemaException
     */
    public function __construct(
        private readonly array $schema,
        private readonly array $array,
    ) {
        $this->ensureSchemaIsValid();
    }

    public function validate(): ValidationResultInterface
    {
        if (!$this->result) {
            $result = new ValidationResult([]);

//            foreach ($this->schema as $entry) {
//                 $key = $entry;
//                 $type = $entry;
//            }

            // TODO: implement schema validation

            $this->result = $result;
        }

        return $this->result;
    }

    /**
     * @throws SchemaException
     */
    private function ensureSchemaIsValid(): void
    {
        $result = (new Schema\Validator($this->schema))->validate();

        if (!$result->isValid()) {
            throw new SchemaException(
                $result,
                'Schema is invalid.',
            );
        }
    }
}
