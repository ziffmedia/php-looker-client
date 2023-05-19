<?php

namespace ZiffMedia\Looker\Type;

class CredentialsGoogle
{
    public readonly array $can;

    public readonly ?string $created_at;

    public readonly ?string $domain;

    public readonly ?string $email;

    public readonly ?string $google_user_id;

    public readonly bool $is_disabled;

    public readonly ?string $logged_in_at;

    public readonly ?string $type;

    public readonly ?string $url;
}
