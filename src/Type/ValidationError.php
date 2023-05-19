<?php

namespace ZiffMedia\Looker\Type;

class ValidationError
{
    public readonly ?string $message;

    public readonly ?array $errors;

    public readonly ?string $documentation_url;
}
