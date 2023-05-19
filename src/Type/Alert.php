<?php

namespace ZiffMedia\Looker\Type;

class Alert
{
    public ?array $applied_dashboard_filters;

    public string $comparison_type;

    public string $cron;

    public ?string $custom_url_base;

    public ?string $custom_url_params;

    public ?string $custom_url_label;

    public bool $show_custom_url;

    public ?string $custom_title;

    public ?string $dashboard_element_id;

    public ?string $description;

    public ?array $destinations;

    public null $field;

    public readonly bool $followed;

    public readonly bool $followable;

    public readonly string $id;

    public bool $is_disabled;

    public ?string $disabled_reason;

    public bool $is_public;

    public ?string $investigative_content_type;

    public ?string $investigative_content_id;

    public readonly ?string $investigative_content_title;

    public ?string $lookml_dashboard_id;

    public ?string $lookml_link_id;

    public string $owner_id;

    public readonly ?string $owner_display_name;

    public int $threshold;

    public null $time_series_condition_state;
}
