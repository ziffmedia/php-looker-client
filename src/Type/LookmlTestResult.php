<?php

namespace ZiffMedia\Looker\Type;

class LookmlTestResult
{
    public readonly array $can;

    public readonly string $model_name;

    public readonly string $test_name;

    public readonly int $assertions_count;

    public readonly int $assertions_failed;

    public readonly ?array $errors;

    public readonly ?array $warnings;

    public readonly bool $success;
}
