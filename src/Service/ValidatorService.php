<?php

namespace Pair\Service;

class ValidatorService
{
    public function __construct(private array $validators)
    {
    }

    public function validate(mixed $input): array
    {
        $errors = [];
        foreach ($this->validators as $validator) {
            $result = $validator->validate($input);
            if (!$result) {
                $errors[] = [$validator::class => $validator->getErrorMessage()];
            }
        }
        return $errors;
    }
}