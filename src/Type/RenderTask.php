<?php

namespace ZiffMedia\Looker\Type;

class RenderTask
{
    public readonly array $can;

    public readonly ?string $created_at;

    public readonly ?string $dashboard_filters;

    public readonly ?string $dashboard_id;

    public readonly ?string $dashboard_style;

    public readonly ?string $finalized_at;

    public readonly ?int $height;

    public readonly string $id;

    public readonly ?string $look_id;

    public readonly ?string $lookml_dashboard_id;

    public readonly ?string $query_id;

    public readonly ?string $dashboard_element_id;

    public readonly ?int $query_runtime;

    public readonly ?int $render_runtime;

    public readonly ?string $result_format;

    public readonly ?int $runtime;

    public readonly ?string $status;

    public readonly ?string $status_detail;

    public readonly ?string $user_id;

    public readonly ?int $width;
}
