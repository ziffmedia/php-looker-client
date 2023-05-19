<?php

namespace ZiffMedia\Looker\Type;

class Permission
{
    public readonly array $can;

    public readonly ?string $permission;

    public readonly ?string $parent;

    public readonly ?string $description;
}
