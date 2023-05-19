<?php

namespace ZiffMedia\Looker\Type;

class ApiVersion
{
    public readonly string $looker_release_version;

    public null $current_version;

    public readonly array $supported_versions;

    public readonly string $api_server_url;

    public readonly string $web_server_url;
}
