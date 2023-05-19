<?php

namespace ZiffMedia\Looker\Type;

class DataActionFormField
{
    public readonly ?string $name;

    public readonly ?string $label;

    public readonly ?string $description;

    public readonly ?string $type;

    public readonly ?string $default;

    public readonly ?string $oauth_url;

    public readonly bool $interactive;

    public readonly bool $required;

    public readonly ?array $options;
}
