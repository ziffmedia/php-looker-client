<?php

namespace ZiffMedia\Looker\Type;

class ProjectFile
{
    public readonly array $can;

    public readonly string $id;

    public readonly ?string $path;

    public readonly ?string $title;

    public readonly ?string $type;

    public readonly ?string $extension;

    public readonly ?string $mime_type;

    public readonly bool $editable;

    public null $git_status;
}
