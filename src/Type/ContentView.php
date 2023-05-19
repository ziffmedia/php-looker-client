<?php

namespace ZiffMedia\Looker\Type;

class ContentView
{
    public readonly array $can;

    public readonly string $id;

    public readonly ?string $look_id;

    public readonly ?string $dashboard_id;

    public readonly ?string $title;

    public readonly ?string $content_metadata_id;

    public readonly ?string $user_id;

    public readonly ?string $group_id;

    public readonly ?int $view_count;

    public readonly ?int $favorite_count;

    public readonly ?string $last_viewed_at;

    public readonly ?string $start_of_week_date;
}
