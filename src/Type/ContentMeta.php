<?php

namespace ZiffMedia\Looker\Type;

class ContentMeta
{
    public readonly array $can;

    public readonly string $id;

    public readonly ?string $name;

    public readonly ?string $parent_id;

    public readonly ?string $dashboard_id;

    public readonly ?string $look_id;

    public readonly ?string $folder_id;

    public readonly ?string $content_type;

    public bool $inherits;

    public readonly ?string $inheriting_id;

    public readonly ?string $slug;
}
