<?php

namespace ZiffMedia\Looker\Type;

class LDAPUserAttributeWrite
{
    public ?string $name;

    public bool $required;

    public ?array $user_attribute_ids;

    public readonly ?string $url;
}
