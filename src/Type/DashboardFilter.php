<?php

namespace ZiffMedia\Looker\Type;

class DashboardFilter
{
    public readonly array $can;

    public readonly string $id;

    public readonly ?string $dashboard_id;

    public ?string $name;

    public ?string $title;

    public ?string $type;

    public ?string $default_value;

    public ?string $model;

    public ?string $explore;

    public ?string $dimension;

    public readonly ?array $field;

    public ?int $row;

    public ?array $listens_to_filters;

    public bool $allow_multiple_values;

    public bool $required;

    public ?array $ui_config;
}
