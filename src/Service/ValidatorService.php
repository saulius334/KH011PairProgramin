<?php

namespace Pair\Service;

class ValidatorService
{
    public function __construct(private array $validators)
    {
    }

    public function validate(mixed $input)
    {
        foreach ($this->validators as $validator) {
            $result = $validator->validate($input);
            if (!$result) {
                $validator->getErrorMessage();
            }
        }
    }
}