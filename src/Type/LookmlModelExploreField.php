<?php

namespace ZiffMedia\Looker\Type;

class LookmlModelExploreField
{
    public readonly string $align;

    public readonly bool $can_filter;

    public readonly ?string $category;

    public readonly ?string $default_filter_value;

    public readonly ?string $description;

    public readonly ?string $dimension_group;

    public readonly ?array $enumerations;

    public readonly ?string $error;

    public readonly ?string $field_group_label;

    public readonly ?string $field_group_variant;

    public readonly ?string $fill_style;

    public readonly int $fiscal_month_offset;

    public readonly bool $has_allowed_values;

    public readonly bool $hidden;

    public readonly bool $is_filter;

    public readonly bool $is_fiscal;

    public readonly bool $is_numeric;

    public readonly bool $is_timeframe;

    public readonly bool $can_time_filter;

    public null $time_interval;

    public readonly string $label;

    public readonly ?string $label_from_parameter;

    public readonly string $label_short;

    public readonly ?string $lookml_link;

    public null $map_layer;

    public readonly bool $measure;

    public readonly string $name;

    public readonly bool $strict_value_format;

    public readonly bool $parameter;

    public readonly ?bool $permanent;

    public readonly bool $primary_key;

    public readonly ?string $project_name;

    public readonly bool $requires_refresh_on_sort;

    public readonly string $scope;

    public readonly bool $sortable;

    public readonly string $source_file;

    public readonly string $source_file_path;

    public readonly ?string $sql;

    public readonly ?array $sql_case;

    public readonly ?array $filters;

    public readonly string $suggest_dimension;

    public readonly string $suggest_explore;

    public readonly bool $suggestable;

    public readonly ?array $suggestions;

    public readonly array $tags;

    public readonly string $type;

    public readonly array $user_attribute_filter_types;

    public readonly ?string $value_format;

    public readonly string $view;

    public readonly string $view_label;

    public readonly bool $dynamic;

    public readonly string $week_start_day;

    public readonly int $times_used;

    public readonly string $original_view;
}
