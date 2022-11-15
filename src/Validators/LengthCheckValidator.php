<?php

namespace Pair\Validators;

use _PHPStan_582a9cb8b\Nette\OutOfRangeException;

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

    public function getErrorMessage()
    {

    }
}