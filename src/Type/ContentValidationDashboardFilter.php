<?php

namespace ZiffMedia\Looker\Type;

class ContentValidationDashboardFilter
{
    public readonly string $id;

    public readonly ?string $dashboard_id;

    public ?string $name;

    public ?string $title;

    public ?string $type;

    public ?string $default_value;

    public ?string $model;

    public ?string $explore;

    public ?string $dimension;
}
