<?php

namespace ZiffMedia\Looker\Type;

class GroupHierarchy
{
    public readonly array $can;

    public bool $can_add_to_content_metadata;

    public readonly bool $contains_current_user;

    public readonly ?string $external_group_id;

    public readonly bool $externally_managed;

    public readonly string $id;

    public readonly bool $include_by_default;

    public ?string $name;

    public readonly ?int $user_count;

    public readonly ?array $parent_group_ids;

    public readonly ?array $role_ids;
}
