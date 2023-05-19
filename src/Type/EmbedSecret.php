<?php

namespace ZiffMedia\Looker\Type;

class EmbedSecret
{
    public ?string $algorithm;

    public readonly ?string $created_at;

    public bool $enabled;

    public readonly string $id;

    public readonly ?string $secret;

    public readonly ?string $user_id;

    public string $secret_type;
}
