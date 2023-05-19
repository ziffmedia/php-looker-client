<?php

namespace ZiffMedia\Looker\Type;

class LookWithDashboards
{
    public readonly array $can;

    public readonly ?string $content_metadata_id;

    public readonly string $id;

    public ?string $title;

    public ?string $user_id;

    public readonly ?string $content_favorite_id;

    public readonly ?string $created_at;

    public bool $deleted;

    public readonly ?string $deleted_at;

    public readonly ?string $deleter_id;

    public ?string $description;

    public readonly ?string $embed_url;

    public readonly ?string $excel_file_url;

    public readonly ?int $favorite_count;

    public readonly ?string $google_spreadsheet_formula;

    public readonly ?string $image_embed_url;

    public bool $is_run_on_load;

    public readonly ?string $last_accessed_at;

    public readonly ?string $last_updater_id;

    public readonly ?string $last_viewed_at;

    public null $model;

    public bool $public;

    public readonly ?string $public_slug;

    public readonly ?string $public_url;

    public ?string $query_id;

    public readonly ?string $short_url;

    public null $folder;

    public ?string $folder_id;

    public readonly ?string $updated_at;

    public readonly ?int $view_count;

    public readonly ?array $dashboards;
}
