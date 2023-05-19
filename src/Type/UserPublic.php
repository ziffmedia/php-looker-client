<?php

namespace ZiffMedia\Looker\Type;

class UserPublic
{
    public readonly array $can;

    public readonly string $id;

    public readonly string $first_name;

    public readonly string $last_name;

    public readonly ?string $display_name;

    public readonly string $avatar_url;

    public readonly ?string $url;
}
