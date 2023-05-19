<?php

namespace ZiffMedia\Looker\Type;

class LDAPGroupWrite
{
    public ?string $id;

    public readonly ?string $looker_group_id;

    public ?string $looker_group_name;

    public ?string $name;

    public ?array $role_ids;

    public readonly ?string $url;
}
