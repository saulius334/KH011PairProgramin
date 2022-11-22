<?php

namespace Pair\Validators;

use http\Exception\InvalidArgumentException;

class LengthCheckValidator implements ValidatorInterface
{
    public function __construct(private int $length)
    {
    }

    public function validate(mixed $subject):bool
    {
        if (strlen($subject) < $this->length) {
            throw new InvalidArgumentException("Input length must be at least $this->length characters");
        }
        return true;
    }

}