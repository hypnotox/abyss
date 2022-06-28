<?php

declare(strict_types=1);

namespace HypnoTox\Abyss\Hydration;

final class Hydrator
{
    /**
     * @param class-string $class
     *
     * @throws \ReflectionException
     */
    public static function hydrate(string $class, array $data): object
    {
        $object = (new \ReflectionClass($class))->newInstanceWithoutConstructor();
        $reflectionObject = new \ReflectionObject($object);
        // TODO: implement more elaborate assignment process according to expected type and whatnot

        /** @psalm-var mixed $value */
        foreach ($data as $property => $value) {
            $reflectionObject->getProperty((string) $property)->setValue($object, $value);
        }

        return $object;
    }
}
