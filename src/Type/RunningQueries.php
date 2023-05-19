<?php

namespace ZiffMedia\Looker\Type;

class RunningQueries
{
    public readonly array $can;

    public readonly string $id;

    public null $user;

    public null $query;

    public null $sql_query;

    public null $look;

    public readonly ?string $created_at;

    public readonly ?string $completed_at;

    public readonly ?string $query_id;

    public readonly ?string $source;

    public readonly ?string $node_id;

    public readonly ?string $slug;

    public readonly ?string $query_task_id;

    public readonly ?string $cache_key;

    public readonly ?string $connection_name;

    public readonly ?string $dialect;

    public readonly ?string $connection_id;

    public readonly ?string $message;

    public readonly ?string $status;

    public readonly ?int $runtime;

    public readonly ?string $sql;
}
