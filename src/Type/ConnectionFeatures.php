<?php

namespace ZiffMedia\Looker\Type;

class ConnectionFeatures
{
    public readonly string $dialect_name;

    public readonly bool $cost_estimate;

    public readonly bool $multiple_databases;

    public readonly bool $column_search;

    public readonly bool $persistent_table_indexes;

    public readonly bool $persistent_derived_tables;

    public readonly bool $turtles;

    public readonly bool $percentile;

    public readonly bool $distinct_percentile;

    public readonly bool $stable_views;

    public readonly bool $milliseconds;

    public readonly bool $microseconds;

    public readonly bool $subtotals;

    public readonly bool $location;

    public readonly bool $timezone;

    public readonly bool $connection_pooling;
}
