<?php

namespace Pair\Validators;

use InvalidArgumentException;

class SymbolValidator implements ValidatorInterface
{
    public function __construct(private mixed $input)
    {
    }

    public function validate(mixed $subject): bool
    {
        $result = str_split($subject);
        if (!in_array($this->input, $result)) {
            throw new InvalidArgumentException("Input must contain at least one $this->input");
        }
        return true;
    }
}