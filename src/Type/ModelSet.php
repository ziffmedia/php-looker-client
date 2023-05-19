<?php

namespace ZiffMedia\Looker\Type;

class ModelSet
{
    public readonly array $can;

    public readonly bool $all_access;

    public readonly bool $built_in;

    public readonly string $id;

    public ?array $models;

    public ?string $name;

    public readonly ?string $url;
}
