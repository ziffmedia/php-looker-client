<?php

namespace ZiffMedia\Looker\Type;

class CredentialsTotp
{
    public readonly array $can;

    public readonly ?string $created_at;

    public readonly bool $is_disabled;

    public readonly ?string $type;

    public readonly bool $verified;

    public readonly ?string $url;
}
