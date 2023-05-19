<?php

namespace ZiffMedia\Looker\Type;

class SqlQuery
{
    public readonly array $can;

    public readonly string $slug;

    public readonly ?int $last_runtime;

    public readonly int $run_count;

    public readonly int $browser_limit;

    public readonly string $sql;

    public readonly ?string $last_run_at;

    public null $connection;

    public readonly ?string $model_name;

    public null $creator;

    public readonly ?string $explore_url;

    public readonly bool $plaintext;

    public ?array $vis_config;

    public ?string $result_maker_id;
}
