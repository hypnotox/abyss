<?php

declare(strict_types=1);

namespace HypnoTox\Abyss;

use Throwable;

class SchemaException extends \Exception
{
    public function __construct(
        private readonly ValidationResultInterface $result,
        string $message = '',
        int $code = 0,
        ?Throwable $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }

    public function getResult(): ValidationResultInterface
    {
        return $this->result;
    }
}
