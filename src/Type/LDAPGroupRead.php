<?php

namespace ZiffMedia\Looker\Type;

class LDAPGroupRead
{
    public readonly string $id;

    public readonly ?string $looker_group_id;

    public readonly ?string $looker_group_name;

    public readonly ?string $name;

    public readonly ?array $roles;

    public readonly ?string $url;
}
