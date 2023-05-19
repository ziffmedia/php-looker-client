<?php

namespace ZiffMedia\Looker\Type;

class CredentialsEmail
{
    public readonly array $can;

    public readonly ?string $created_at;

    public ?string $email;

    public bool $forced_password_reset_at_next_login;

    public readonly ?string $user_id;

    public readonly bool $is_disabled;

    public readonly ?string $logged_in_at;

    public readonly ?string $password_reset_url;

    public readonly ?string $account_setup_url;

    public readonly ?string $type;

    public readonly ?string $url;

    public readonly ?string $user_url;
}
