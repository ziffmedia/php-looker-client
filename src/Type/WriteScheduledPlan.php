<?php

namespace ZiffMedia\Looker\Type;

class WriteScheduledPlan
{
    public ?string $name;

    public ?string $user_id;

    public bool $run_as_recipient;

    public bool $enabled;

    public ?string $look_id;

    public ?string $dashboard_id;

    public ?string $lookml_dashboard_id;

    public ?string $filters_string;

    public ?string $dashboard_filters;

    public bool $require_results;

    public bool $require_no_results;

    public bool $require_change;

    public bool $send_all_results;

    public ?string $crontab;

    public ?string $datagroup;

    public ?string $timezone;

    public ?string $query_id;

    public ?array $scheduled_plan_destination;

    public bool $run_once;

    public bool $include_links;

    public ?string $custom_url_base;

    public ?string $custom_url_params;

    public ?string $custom_url_label;

    public bool $show_custom_url;

    public ?string $pdf_paper_size;

    public bool $pdf_landscape;

    public bool $embed;

    public ?string $color_theme;

    public bool $long_tables;

    public ?int $inline_table_width;
}
