<?php

namespace ZiffMedia\Looker\Type;

class UserLoginLockout
{
    public readonly array $can;

    public readonly ?string $key;

    public readonly ?string $auth_type;

    public readonly ?string $ip;

    public readonly ?string $user_id;

    public readonly ?string $remote_id;

    public readonly ?string $full_name;

    public readonly ?string $email;

    public readonly ?int $fail_count;

    public readonly ?string $lockout_at;
}
