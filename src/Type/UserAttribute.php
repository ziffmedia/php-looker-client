<?php

namespace ZiffMedia\Looker\Type;

class UserAttribute
{
    public readonly array $can;

    public readonly string $id;

    public ?string $name;

    public ?string $label;

    public ?string $type;

    public ?string $default_value;

    public readonly bool $is_system;

    public readonly bool $is_permanent;

    public bool $value_is_hidden;

    public bool $user_can_view;

    public bool $user_can_edit;

    public ?string $hidden_value_domain_whitelist;
}
