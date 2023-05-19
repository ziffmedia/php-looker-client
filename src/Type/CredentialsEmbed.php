<?php

namespace ZiffMedia\Looker\Type;

class CredentialsEmbed
{
    public readonly array $can;

    public readonly ?string $created_at;

    public readonly ?string $external_group_id;

    public readonly ?string $external_user_id;

    public readonly string $id;

    public readonly bool $is_disabled;

    public readonly ?string $logged_in_at;

    public readonly ?string $type;

    public readonly ?string $url;
}
