<?php

namespace ZiffMedia\Looker\Type;

class OIDCGroupRead
{
    public readonly string $id;

    public readonly ?string $looker_group_id;

    public readonly ?string $looker_group_name;

    public readonly ?string $name;

    public readonly ?array $roles;
}
