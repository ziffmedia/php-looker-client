<?php

namespace ZiffMedia\Looker\Type;

class RepositoryCredential
{
    public readonly array $can;

    public readonly string $id;

    public readonly string $root_project_id;

    public readonly string $remote_url;

    public ?string $git_username;

    public ?string $git_password;

    public ?string $ssh_public_key;

    public readonly bool $is_configured;
}
