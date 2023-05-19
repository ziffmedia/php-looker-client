<?php

namespace ZiffMedia\Looker\Type;

class CreateDashboardFilter
{
    public readonly string $id;

    public ?string $dashboard_id;

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
