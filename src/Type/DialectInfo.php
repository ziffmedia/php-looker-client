<?php

namespace ZiffMedia\Looker\Type;

class DialectInfo
{
    public readonly array $can;

    public readonly ?string $default_max_connections;

    public readonly ?string $default_port;

    public readonly bool $installed;

    public readonly ?string $label;

    public readonly ?string $label_for_database_equivalent;

    public readonly ?string $name;

    public null $supported_options;
}
