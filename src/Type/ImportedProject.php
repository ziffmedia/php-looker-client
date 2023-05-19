<?php

namespace ZiffMedia\Looker\Type;

class ImportedProject
{
    public readonly ?string $name;

    public readonly ?string $url;

    public readonly ?string $ref;

    public readonly bool $is_remote;
}
