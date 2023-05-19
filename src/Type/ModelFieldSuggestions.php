<?php

namespace ZiffMedia\Looker\Type;

class ModelFieldSuggestions
{
    public readonly array $suggestions;

    public readonly ?string $error;

    public readonly bool $from_cache;

    public readonly bool $hit_limit;

    public readonly bool $used_calcite_materialization;
}
