<?php

namespace ZiffMedia\Looker\Type;

class UpdateArtifact
{
    public string $key;

    public string $value;

    public ?string $content_type;

    public readonly int $version;
}
