<?php

namespace Pair\Validators;

use _PHPStan_582a9cb8b\Nette\OutOfRangeException;

class SymbolValidator implements ValidatorInterface
{
    public function __construct(private int $length)
    {
    }

    public function validate(mixed $subject)
    {
        if (strlen($subject) < $this->length) {
            Throw new OutOfRangeException("The input must be at least $this->length characters");
        }
    }
}