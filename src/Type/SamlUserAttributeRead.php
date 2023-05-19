<?php

namespace ZiffMedia\Looker\Type;

class SamlUserAttributeRead
{
    public readonly ?string $name;

    public readonly bool $required;

    public readonly ?array $user_attributes;

    public readonly ?string $url;
}
