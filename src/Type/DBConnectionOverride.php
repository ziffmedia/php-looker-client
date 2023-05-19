<?php

namespace ZiffMedia\Looker\Type;

class DBConnectionOverride
{
    public string $context;

    public ?string $host;

    public ?string $port;

    public ?string $username;

    public ?string $password;

    public readonly bool $has_password;

    public ?string $certificate;

    public ?string $file_type;

    public ?string $database;

    public ?string $schema;

    public ?string $jdbc_additional_params;

    public ?string $after_connect_statements;
}
