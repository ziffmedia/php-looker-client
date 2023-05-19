<?php

namespace ZiffMedia\Looker\Type;

class ContentMetaGroupUser
{
    public readonly array $can;

    public readonly string $id;

    public readonly ?string $content_metadata_id;

    public readonly ?string $permission_type;

    public readonly ?string $group_id;

    public readonly ?string $user_id;
}
