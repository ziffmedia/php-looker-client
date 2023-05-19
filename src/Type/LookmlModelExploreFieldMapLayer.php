<?php

namespace ZiffMedia\Looker\Type;

class LookmlModelExploreFieldMapLayer
{
    public readonly string $url;

    public readonly string $name;

    public readonly ?string $feature_key;

    public readonly ?string $property_key;

    public readonly ?string $property_label_key;

    public readonly ?string $projection;

    public readonly string $format;

    public readonly ?string $extents_json_url;

    public readonly ?int $max_zoom_level;

    public readonly ?int $min_zoom_level;
}
