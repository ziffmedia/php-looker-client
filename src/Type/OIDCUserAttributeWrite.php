<?php

namespace ZiffMedia\Looker\Type;

class OIDCUserAttributeWrite
{
    public ?string $name;

    public bool $required;

    public ?array $user_attribute_ids;
}
