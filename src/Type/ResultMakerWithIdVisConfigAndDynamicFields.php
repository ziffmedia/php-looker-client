<?php

namespace ZiffMedia\Looker\Type;

class ResultMakerWithIdVisConfigAndDynamicFields
{
    public readonly string $id;

    public readonly ?string $dynamic_fields;

    public readonly ?array $filterables;

    public readonly ?array $sorts;

    public readonly ?string $merge_result_id;

    public readonly bool $total;

    public readonly ?string $query_id;

    public readonly ?string $sql_query_id;

    public null $query;

    public readonly ?array $vis_config;
}
