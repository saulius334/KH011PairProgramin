<?php

namespace Pair\Validators;

use _PHPStan_582a9cb8b\Nette\OutOfRangeException;
use OutOfRangeException as GlobalOutOfRangeException;

class LengthCheckValidator implements ValidatorInterface
{
    public function __construct(private int $length)
    {
    }

    public function validate(mixed $subject):bool
    {
        if (strlen($subject) < $this->length) {
            return false;

        } else {
            return true;
        }
    }

    public function getErrorMessage(): void
    {
        throw new GlobalOutOfRangeException("Input length must be at least $this->length characters");
    }
}