<?php

namespace ZiffMedia\Looker\Type;

class Folder
{
    public string $name;

    public ?string $parent_id;

    public readonly string $id;

    public readonly ?string $content_metadata_id;

    public readonly ?string $created_at;

    public readonly ?string $creator_id;

    public readonly ?int $child_count;

    public readonly ?string $external_id;

    public readonly bool $is_embed;

    public readonly bool $is_embed_shared_root;

    public readonly bool $is_embed_users_root;

    public readonly bool $is_personal;

    public readonly bool $is_personal_descendant;

    public readonly bool $is_shared_root;

    public readonly bool $is_users_root;

    public readonly array $can;

    public readonly ?array $dashboards;

    public readonly ?array $looks;
}
