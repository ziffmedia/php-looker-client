<?php

namespace ZiffMedia\Looker\Type;

class LookmlModelExploreError
{
    public readonly ?string $message;

    public readonly mixed $details;

    public readonly ?string $error_pos;

    public readonly bool $field_error;
}
