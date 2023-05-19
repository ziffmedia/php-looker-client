<?php

namespace ZiffMedia\Looker\Type;

class SqlQueryCreate
{
    public ?string $connection_name;

    public ?string $connection_id;

    public ?string $model_name;

    public ?string $sql;

    public ?array $vis_config;
}
