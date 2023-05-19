<?php

namespace ZiffMedia\Looker\Type;

class ContentValidationError
{
    public readonly ?string $message;

    public readonly ?string $field_name;

    public readonly ?string $model_name;

    public readonly ?string $explore_name;

    public readonly bool $removable;
}
