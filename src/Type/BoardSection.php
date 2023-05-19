<?php

namespace ZiffMedia\Looker\Type;

class BoardSection
{
    public readonly array $can;

    public readonly ?string $created_at;

    public ?string $deleted_at;

    public ?string $description;

    public ?string $board_id;

    public readonly ?array $board_items;

    public readonly string $id;

    public ?array $item_order;

    public readonly ?array $visible_item_order;

    public ?string $title;

    public readonly ?string $updated_at;
}
