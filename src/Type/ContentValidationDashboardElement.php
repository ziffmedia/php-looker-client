<?php

namespace ZiffMedia\Looker\Type;

class ContentValidationDashboardElement
{
    public ?string $body_text;

    public ?string $dashboard_id;

    public readonly string $id;

    public ?string $look_id;

    public ?string $note_display;

    public ?string $note_state;

    public ?string $note_text;

    public readonly ?string $note_text_as_html;

    public ?string $query_id;

    public ?string $subtitle_text;

    public ?string $title;

    public bool $title_hidden;

    public ?string $title_text;

    public ?string $type;

    public ?string $rich_content_json;

    public ?string $extension_id;
}
