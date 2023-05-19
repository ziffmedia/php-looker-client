<?php

namespace ZiffMedia\Looker\Type;

class ExternalOauthApplication
{
    public readonly array $can;

    public readonly string $id;

    public string $name;

    public string $client_id;

    public string $client_secret;

    public ?string $dialect_name;

    public readonly string $created_at;
}
