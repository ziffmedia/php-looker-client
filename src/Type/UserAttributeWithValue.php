<?php

namespace ZiffMedia\Looker\Type;

class UserAttributeWithValue
{
    public readonly array $can;

    public readonly ?string $name;

    public readonly ?string $label;

    public readonly ?int $rank;

    public ?string $value;

    public readonly ?string $user_id;

    public readonly bool $user_can_edit;

    public readonly bool $value_is_hidden;

    public readonly ?string $user_attribute_id;

    public readonly ?string $source;

    public readonly ?string $hidden_value_domain_whitelist;
}
