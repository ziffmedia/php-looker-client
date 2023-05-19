<?php

namespace ZiffMedia\Looker\Type;

class ValidationErrorDetail
{
    public readonly ?string $field;

    public readonly ?string $code;

    public readonly ?string $message;

    public readonly ?string $documentation_url;
}
