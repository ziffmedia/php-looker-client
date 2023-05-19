<?php

namespace ZiffMedia\Looker\Type;

class Artifact
{
    public string $key;

    public string $value;

    public ?string $content_type;

    public readonly int $version;

    public readonly string $namespace;

    public readonly string $created_at;

    public readonly string $updated_at;

    public readonly int $value_size;

    public readonly string $created_by_userid;

    public readonly string $updated_by_userid;
}
