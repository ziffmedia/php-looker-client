<?php

namespace ZiffMedia\Looker\Type;

class SchemaColumns
{
    public readonly ?string $name;

    public readonly ?string $sql_escaped_name;

    public readonly ?string $schema_name;

    public readonly array $columns;
}
