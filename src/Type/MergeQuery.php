<?php

namespace ZiffMedia\Looker\Type;

class MergeQuery
{
    public readonly array $can;

    public ?string $column_limit;

    public ?string $dynamic_fields;

    public readonly string $id;

    public ?array $pivots;

    public readonly ?string $result_maker_id;

    public ?array $sorts;

    public ?array $source_queries;

    public bool $total;

    public ?array $vis_config;
}
