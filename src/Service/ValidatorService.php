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
            try {
                $validator->validate($input);
            } catch (\Exception $exception) {
                $errors[] = [$validator::class => $exception->getMessage()];
            }
        }
        return $errors;
    }
}

