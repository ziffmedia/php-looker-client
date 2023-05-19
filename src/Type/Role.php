<?php

namespace ZiffMedia\Looker\Type;

class Role
{
    public readonly array $can;

    public readonly string $id;

    public ?string $name;

    public null $permission_set;

    public ?string $permission_set_id;

    public null $model_set;

    public ?string $model_set_id;

    public readonly ?string $url;

    public readonly ?string $users_url;
}
