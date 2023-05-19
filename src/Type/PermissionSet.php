<?php

namespace ZiffMedia\Looker\Type;

class PermissionSet
{
    public readonly array $can;

    public readonly bool $all_access;

    public readonly bool $built_in;

    public readonly string $id;

    public ?string $name;

    public ?array $permissions;

    public readonly ?string $url;
}
