<?php

namespace ZiffMedia\Looker\Type;

class Dashboard
{
    public readonly array $can;

    public readonly ?string $content_favorite_id;

    public readonly ?string $content_metadata_id;

    public ?string $description;

    public bool $hidden;

    public readonly string $id;

    public null $model;

    public ?string $query_timezone;

    public readonly bool $readonly;

    public ?string $refresh_interval;

    public readonly ?int $refresh_interval_to_i;

    public null $folder;

    public ?string $title;

    public readonly ?string $user_id;

    public ?string $slug;

    public ?string $preferred_viewer;

    public bool $alert_sync_with_dashboard_filter_enabled;

    public ?string $background_color;

    public readonly ?string $created_at;

    public bool $crossfilter_enabled;

    public readonly ?array $dashboard_elements;

    public readonly ?array $dashboard_filters;

    public readonly ?array $dashboard_layouts;

    public bool $deleted;

    public readonly ?string $deleted_at;

    public readonly ?string $deleter_id;

    public readonly ?string $edit_uri;

    public bool $enable_viz_full_screen;

    public readonly ?int $favorite_count;

    public bool $filters_bar_collapsed;

    public bool $filters_location_top;

    public readonly ?string $last_accessed_at;

    public readonly ?string $last_viewed_at;

    public readonly ?string $updated_at;

    public readonly ?string $last_updater_id;

    public readonly ?string $last_updater_name;

    public readonly ?string $user_name;

    public ?string $load_configuration;

    public ?string $lookml_link_id;

    public ?bool $show_filters_bar;

    public ?bool $show_title;

    public ?string $folder_id;

    public ?string $text_tile_text_color;

    public ?string $tile_background_color;

    public ?string $tile_text_color;

    public ?string $title_color;

    public readonly ?int $view_count;

    public null $appearance;

    public readonly ?string $url;
}
