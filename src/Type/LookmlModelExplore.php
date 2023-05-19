<?php

namespace ZiffMedia\Looker\Type;

class LookmlModelExplore
{
    public readonly string $id;

    public readonly ?string $name;

    public readonly ?string $description;

    public readonly ?string $label;

    public readonly ?string $title;

    public readonly ?array $scopes;

    public readonly bool $can_total;

    public readonly bool $can_develop;

    public readonly bool $can_see_lookml;

    public readonly ?string $lookml_link;

    public readonly bool $can_save;

    public readonly bool $can_explain;

    public readonly bool $can_pivot_in_db;

    public readonly bool $can_subtotal;

    public readonly bool $has_timezone_support;

    public readonly bool $supports_cost_estimate;

    public readonly ?string $connection_name;

    public readonly ?string $null_sort_treatment;

    public readonly ?array $files;

    public readonly ?string $source_file;

    public readonly ?string $project_name;

    public readonly ?string $model_name;

    public readonly ?string $view_name;

    public readonly bool $hidden;

    public readonly ?string $sql_table_name;

    public readonly ?array $access_filter_fields;

    public readonly ?array $access_filters;

    public readonly ?array $aliases;

    public readonly ?array $always_filter;

    public readonly ?array $conditionally_filter;

    public readonly ?array $index_fields;

    public readonly ?array $sets;

    public readonly ?array $tags;

    public readonly ?array $errors;

    public null $fields;

    public readonly ?array $joins;

    public readonly ?string $group_label;

    public readonly array $supported_measure_types;

    public readonly ?array $always_join;
}
