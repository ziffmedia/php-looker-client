<?php

namespace ZiffMedia\Looker\Type;

class CreateOAuthApplicationUserStateRequest
{
    public string $user_id;

    public string $oauth_application_id;

    public string $access_token;

    public string $access_token_expires_at;

    public ?string $refresh_token;

    public ?string $refresh_token_expires_at;
}
