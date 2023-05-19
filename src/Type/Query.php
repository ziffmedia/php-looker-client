<?php

namespace ZiffMedia\Looker\Type;

class Query
{
    public readonly array $can;

    public readonly string $id;

    public string $model;

    public string $view;

    public ?array $fields;

    public ?array $pivots;

    public ?array $fill_fields;

    public ?array $filters;

    public ?string $filter_expression;

    public ?array $sorts;

    public ?string $limit;

    public ?string $column_limit;

    public ?bool $total;

    public ?string $row_total;

    public ?array $subtotals;

    public ?array $vis_config;

    public ?array $filter_config;

    public ?string $visible_ui_sections;

    public readonly ?string $slug;

    public ?string $dynamic_fields;

    public ?string $client_id;

    public readonly ?string $share_url;

    public readonly ?string $expanded_share_url;

    public readonly ?string $url;

    public ?string $query_timezone;

    public readonly bool $has_table_calculations;
}
