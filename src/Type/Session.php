<?php

namespace ZiffMedia\Looker\Type;

class Session
{
    public readonly array $can;

    public readonly string $id;

    public readonly ?string $ip_address;

    public readonly ?string $browser;

    public readonly ?string $operating_system;

    public readonly ?string $city;

    public readonly ?string $state;

    public readonly ?string $country;

    public readonly ?string $credentials_type;

    public readonly ?string $extended_at;

    public readonly ?int $extended_count;

    public readonly ?string $sudo_user_id;

    public readonly ?string $created_at;

    public readonly ?string $expires_at;

    public readonly ?string $url;
}
