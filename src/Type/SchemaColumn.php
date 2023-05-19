<?php

namespace ZiffMedia\Looker\Type;

class SchemaColumn
{
    public readonly ?string $name;

    public readonly ?string $sql_escaped_name;

    public readonly ?string $schema_name;

    public readonly string $data_type_database;

    public readonly string $data_type;

    public readonly string $data_type_looker;

    public readonly ?string $description;

    public readonly ?int $column_size;

    public readonly array $snippets;
}
