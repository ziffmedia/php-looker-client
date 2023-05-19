<?php

namespace ZiffMedia\Looker\Type;

class DashboardLayout
{
    public readonly array $can;

    public readonly string $id;

    public ?string $dashboard_id;

    public ?string $type;

    public bool $active;

    public ?int $column_width;

    public ?int $width;

    public readonly bool $deleted;

    public readonly ?string $dashboard_title;

    public readonly ?array $dashboard_layout_components;
}
