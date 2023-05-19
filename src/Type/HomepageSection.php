<?php

namespace ZiffMedia\Looker\Type;

class HomepageSection
{
    public readonly array $can;

    public readonly ?string $created_at;

    public ?string $deleted_at;

    public readonly ?string $detail_url;

    public ?string $homepage_id;

    public readonly ?array $homepage_items;

    public readonly string $id;

    public readonly bool $is_header;

    public ?array $item_order;

    public ?string $title;

    public readonly ?string $updated_at;

    public ?string $description;

    public readonly ?array $visible_item_order;
}
