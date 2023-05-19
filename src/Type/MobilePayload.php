<?php

namespace ZiffMedia\Looker\Type;

class MobilePayload
{
    public readonly ?string $title;

    public readonly string $alert_id;

    public readonly ?string $investigative_content_id;

    public readonly ?string $dashboard_name;

    public readonly string $dashboard_id;

    public readonly string $query_slug;
}
