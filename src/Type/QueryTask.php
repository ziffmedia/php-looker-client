<?php

namespace ZiffMedia\Looker\Type;

class QueryTask
{
    public readonly array $can;

    public readonly string $id;

    public ?string $query_id;

    public null $query;

    public bool $generate_links;

    public bool $force_production;

    public ?string $path_prefix;

    public bool $cache;

    public bool $server_table_calcs;

    public bool $cache_only;

    public readonly ?string $cache_key;

    public ?string $status;

    public ?string $source;

    public readonly ?int $runtime;

    public bool $rebuild_pdts;

    public readonly ?string $result_source;

    public ?string $look_id;

    public ?string $dashboard_id;

    public readonly ?string $result_format;
}
