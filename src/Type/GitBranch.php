<?php

namespace ZiffMedia\Looker\Type;

class GitBranch
{
    public readonly array $can;

    public ?string $name;

    public readonly ?string $remote;

    public readonly ?string $remote_name;

    public readonly ?string $error;

    public readonly ?string $message;

    public readonly ?string $owner_name;

    public readonly bool $readonly;

    public readonly bool $personal;

    public readonly bool $is_local;

    public readonly bool $is_remote;

    public readonly bool $is_production;

    public readonly ?int $ahead_count;

    public readonly ?int $behind_count;

    public readonly ?int $commit_at;

    public ?string $ref;

    public readonly ?string $remote_ref;
}
