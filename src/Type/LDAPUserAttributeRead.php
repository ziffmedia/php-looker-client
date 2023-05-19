<?php

namespace ZiffMedia\Looker\Type;

class LDAPUserAttributeRead
{
    public readonly ?string $name;

    public readonly bool $required;

    public readonly ?array $user_attributes;

    public readonly ?string $url;
}
