<?php

namespace Pair\Validators;

use _PHPStan_582a9cb8b\Nette\OutOfRangeException;
use OutOfRangeException as GlobalOutOfRangeException;

class SymbolValidator implements ValidatorInterface
{
    public function __construct(private mixed $input)
    {
    }

    public function validate(mixed $subject):bool
    {
        $result = explode('', $subject);
        return in_array($this->input, $result);
    }

    public function getErrorMessage(): void
    {
         throw new GlobalOutOfRangeException("Input must contain at least one $this->input");
    }
}