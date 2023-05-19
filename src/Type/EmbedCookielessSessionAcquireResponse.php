<?php

namespace ZiffMedia\Looker\Type;

class EmbedCookielessSessionAcquireResponse
{
    public ?string $authentication_token;

    public ?int $authentication_token_ttl;

    public ?string $navigation_token;

    public ?int $navigation_token_ttl;

    public ?string $api_token;

    public ?int $api_token_ttl;

    public ?string $session_reference_token;

    public ?int $session_reference_token_ttl;
}
