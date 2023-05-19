<?php

namespace ZiffMedia\Looker\Type;

class UserAttributeGroupValue
{
    public readonly array $can;

    public readonly string $id;

    public readonly ?string $group_id;

    public readonly ?string $user_attribute_id;

    public readonly bool $value_is_hidden;

    public readonly ?int $rank;

    public readonly ?string $value;
}
