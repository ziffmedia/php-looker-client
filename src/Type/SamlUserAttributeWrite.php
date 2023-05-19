<?php

namespace ZiffMedia\Looker\Type;

class SamlUserAttributeWrite
{
    public ?string $name;

    public bool $required;

    public ?array $user_attribute_ids;

    public readonly ?string $url;
}
