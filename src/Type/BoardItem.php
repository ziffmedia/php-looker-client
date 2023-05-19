<?php

namespace ZiffMedia\Looker\Type;

class BoardItem
{
    public readonly array $can;

    public readonly ?string $content_created_by;

    public readonly ?string $content_favorite_id;

    public readonly ?string $content_metadata_id;

    public readonly ?string $content_updated_at;

    public ?string $custom_description;

    public ?string $custom_title;

    public ?string $custom_url;

    public ?string $dashboard_id;

    public readonly ?string $description;

    public readonly ?int $favorite_count;

    public ?string $board_section_id;

    public readonly string $id;

    public readonly ?string $image_url;

    public readonly ?string $location;

    public ?string $look_id;

    public ?string $lookml_dashboard_id;

    public ?int $order;

    public readonly ?string $title;

    public readonly string $url;

    public bool $use_custom_description;

    public bool $use_custom_title;

    public bool $use_custom_url;

    public readonly ?int $view_count;

    public ?string $custom_image_data_base64;

    public readonly ?string $custom_image_url;

    public bool $use_custom_image;
}
