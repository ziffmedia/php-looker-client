<?php

namespace ZiffMedia\Looker\Type;

class DashboardBase
{
    public readonly array $can;

    public readonly ?string $content_favorite_id;

    public readonly ?string $content_metadata_id;

    public readonly ?string $description;

    public readonly bool $hidden;

    public readonly string $id;

    public null $model;

    public readonly ?string $query_timezone;

    public readonly bool $readonly;

    public readonly ?string $refresh_interval;

    public readonly ?int $refresh_interval_to_i;

    public null $folder;

    public readonly ?string $title;

    public readonly ?string $user_id;

    public readonly ?string $slug;

    public readonly ?string $preferred_viewer;
}
