<?php

namespace ZiffMedia\Looker\Type;

class OauthClientApp
{
    public readonly array $can;

    public readonly string $client_guid;

    public string $redirect_uri;

    public string $display_name;

    public string $description;

    public bool $enabled;

    public ?string $group_id;

    public readonly string $tokens_invalid_before;

    public readonly array $activated_users;
}
