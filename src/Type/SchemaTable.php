<?php

namespace ZiffMedia\Looker\Type;

class SchemaTable
{
    public readonly ?string $name;

    public readonly ?string $sql_escaped_name;

    public readonly ?string $schema_name;

    public readonly ?int $rows;

    public readonly ?string $external;

    public readonly array $snippets;
}
