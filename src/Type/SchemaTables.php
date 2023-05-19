<?php

namespace ZiffMedia\Looker\Type;

class SchemaTables
{
    public readonly string $name;

    public readonly bool $is_default;

    public readonly array $tables;

    public readonly bool $table_limit_hit;
}
