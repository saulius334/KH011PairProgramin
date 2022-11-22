<?php

namespace Pair\Validators;

use InvalidArgumentException;

class LowercaseValidator implements ValidatorInterface
{
    public function __construct()
    {
    }

    public function validate(mixed $subject): bool
    {
        if (!ctype_lower($subject)) {
            throw new InvalidArgumentException("Input characters must be lowercase");
        }
        return true;
    }
}