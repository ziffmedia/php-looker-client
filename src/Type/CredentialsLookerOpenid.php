<?php

namespace ZiffMedia\Looker\Type;

class CredentialsLookerOpenid
{
    public readonly array $can;

    public readonly ?string $created_at;

    public readonly ?string $email;

    public readonly bool $is_disabled;

    public readonly ?string $logged_in_at;

    public readonly ?string $logged_in_ip;

    public readonly ?string $type;

    public readonly ?string $url;

    public readonly ?string $user_url;
}
