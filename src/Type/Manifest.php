<?php

namespace ZiffMedia\Looker\Type;

class Manifest
{
    public readonly array $can;

    public readonly ?string $name;

    public readonly ?array $imports;

    public null $localization_settings;
}
