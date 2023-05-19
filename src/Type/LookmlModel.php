<?php

namespace ZiffMedia\Looker\Type;

class LookmlModel
{
    public readonly array $can;

    public ?array $allowed_db_connection_names;

    public readonly ?array $explores;

    public readonly bool $has_content;

    public readonly ?string $label;

    public ?string $name;

    public ?string $project_name;

    public bool $unlimited_db_connections;
}
