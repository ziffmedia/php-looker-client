<?php

namespace ZiffMedia\Looker\Type;

class Board
{
    public readonly array $can;

    public readonly ?string $content_metadata_id;

    public readonly ?string $created_at;

    public ?string $deleted_at;

    public ?string $description;

    public readonly ?array $board_sections;

    public readonly string $id;

    public ?array $section_order;

    public ?string $title;

    public readonly ?string $updated_at;

    public readonly ?string $user_id;

    public readonly bool $primary_homepage;
}
