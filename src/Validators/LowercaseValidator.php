<?php

namespace Pair\Validators;

use _PHPStan_582a9cb8b\Nette\OutOfRangeException;
use OutOfRangeException as GlobalOutOfRangeException;

class LowercaseValidator implements ValidatorInterface
{
    public function __construct()
    {
    }

    public function validate(mixed $subject):bool
    {
        return ctype_lower($subject);
    }

    public function getErrorMessage(): void
    {
         throw new GlobalOutOfRangeException("Input characters must be lowercase");
    }
}