<?php

namespace ZiffMedia\Looker\Type;

class DashboardLayoutComponent
{
    public readonly array $can;

    public readonly string $id;

    public ?string $dashboard_layout_id;

    public ?string $dashboard_element_id;

    public ?int $row;

    public ?int $column;

    public ?int $width;

    public ?int $height;

    public readonly bool $deleted;

    public readonly ?string $element_title;

    public readonly bool $element_title_hidden;

    public readonly ?string $vis_type;
}
