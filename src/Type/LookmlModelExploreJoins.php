<?php

namespace ZiffMedia\Looker\Type;

class LookmlModelExploreJoins
{
    public readonly ?string $name;

    public readonly ?array $dependent_fields;

    public readonly ?array $fields;

    public readonly ?string $foreign_key;

    public readonly ?string $from;

    public readonly ?bool $outer_only;

    public readonly ?string $relationship;

    public readonly ?array $required_joins;

    public readonly ?string $sql_foreign_key;

    public readonly ?string $sql_on;

    public readonly ?string $sql_table_name;

    public readonly ?string $type;

    public readonly ?string $view_label;
}
