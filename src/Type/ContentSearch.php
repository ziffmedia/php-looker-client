<?php

namespace ZiffMedia\Looker\Type;

class ContentSearch
{
    public readonly array $can;

    public readonly ?string $content_id;

    public readonly ?string $type;

    public readonly ?string $title;

    public readonly ?string $description;

    public readonly ?string $folder_id;

    public readonly ?string $folder_name;

    public readonly ?int $view_count;

    public readonly ?string $preferred_viewer;
}
