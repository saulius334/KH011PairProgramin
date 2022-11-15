<?php

namespace Pair\Service;

class ValidatorService
{
    private array $errors;
    public function __construct(private array $validators)
    {
    }

    public function validate(mixed $input)
    {
        foreach ($this->validators as $validator) {
            $result = $validator->validate($input);
            if (!$result) {
                $errors[] = [$validator => $validator->getErrorMessage()];
            }
        }
    }
    public function getAllErrors()
    {
        return $this->errors;
    }
}