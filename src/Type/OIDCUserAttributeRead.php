<?php

namespace ZiffMedia\Looker\Type;

class OIDCUserAttributeRead
{
    public readonly ?string $name;

    public readonly bool $required;

    public readonly ?array $user_attributes;
}
