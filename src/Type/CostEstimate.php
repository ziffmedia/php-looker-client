<?php

namespace ZiffMedia\Looker\Type;

class CostEstimate
{
    public readonly int $cost;

    public readonly bool $cache_hit;

    public readonly string $cost_unit;

    public readonly string $message;
}
