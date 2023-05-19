<?php

namespace ZiffMedia\Looker\Type;

class Dialect
{
    public readonly string $name;

    public readonly string $label;

    public readonly bool $supports_cost_estimate;

    public readonly ?string $cost_estimate_style;

    public readonly string $persistent_table_indexes;

    public readonly string $persistent_table_sortkeys;

    public readonly string $persistent_table_distkey;

    public readonly bool $supports_streaming;

    public readonly bool $automatically_run_sql_runner_snippets;

    public readonly array $connection_tests;

    public readonly bool $supports_inducer;

    public readonly bool $supports_multiple_databases;

    public readonly bool $supports_persistent_derived_tables;

    public readonly bool $has_ssl_support;
}
