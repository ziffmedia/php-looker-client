<?php

namespace ZiffMedia\Looker\Type;

class EmbedCookielessSessionAcquire
{
    public ?int $session_length;

    public bool $force_logout_login;

    public ?string $external_user_id;

    public ?string $first_name;

    public ?string $last_name;

    public ?string $user_timezone;

    public ?array $permissions;

    public ?array $models;

    public ?array $group_ids;

    public ?string $external_group_id;

    public ?array $user_attributes;

    public ?string $session_reference_token;

    public ?string $embed_domain;
}
