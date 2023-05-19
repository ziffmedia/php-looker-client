<?php

namespace ZiffMedia\Looker\Type;

class DashboardElement
{
    public readonly array $can;

    public ?string $body_text;

    public readonly ?string $body_text_as_html;

    public ?string $dashboard_id;

    public readonly ?string $edit_uri;

    public readonly string $id;

    public null $look;

    public ?string $look_id;

    public readonly ?string $lookml_link_id;

    public ?string $merge_result_id;

    public ?string $note_display;

    public ?string $note_state;

    public ?string $note_text;

    public readonly ?string $note_text_as_html;

    public null $query;

    public ?string $query_id;

    public ?string $refresh_interval;

    public readonly ?int $refresh_interval_to_i;

    public null $result_maker;

    public ?string $result_maker_id;

    public ?string $subtitle_text;

    public ?string $title;

    public bool $title_hidden;

    public ?string $title_text;

    public ?string $type;

    public readonly ?int $alert_count;

    public ?string $rich_content_json;

    public readonly ?string $title_text_as_html;

    public readonly ?string $subtitle_text_as_html;

    public ?string $extension_id;
}
