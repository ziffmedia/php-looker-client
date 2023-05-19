<?php

namespace ZiffMedia\Looker\Type;

class EmbedCookielessSessionGenerateTokensResponse
{
    public ?string $navigation_token;

    public ?int $navigation_token_ttl;

    public ?string $api_token;

    public ?int $api_token_ttl;

    public string $session_reference_token;

    public ?int $session_reference_token_ttl;
}
