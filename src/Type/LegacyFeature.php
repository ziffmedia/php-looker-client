<?php

namespace ZiffMedia\Looker\Type;

class LegacyFeature
{
    public readonly array $can;

    public readonly string $id;

    public readonly ?string $name;

    public readonly ?string $description;

    public bool $enabled_locally;

    public readonly bool $enabled;

    public readonly ?string $disallowed_as_of_version;

    public readonly ?string $disable_on_upgrade_to_version;

    public readonly ?string $end_of_life_version;

    public readonly ?string $documentation_url;

    public readonly ?string $approximate_disable_date;

    public readonly ?string $approximate_end_of_life_date;

    public readonly bool $has_disabled_on_upgrade;
}
