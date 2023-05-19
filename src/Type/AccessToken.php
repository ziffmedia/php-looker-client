<?php

namespace ZiffMedia\Looker\Type;

class AccessToken
{
    public readonly string $access_token;

    public readonly string $token_type;

    public readonly int $expires_in;

    public readonly ?string $refresh_token;
}
