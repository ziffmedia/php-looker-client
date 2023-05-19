<?php

namespace ZiffMedia\Looker\Type;

class CreateQueryTask
{
    public readonly array $can;

    public ?string $query_id;

    public ?string $result_format;

    public ?string $source;

    public bool $deferred;

    public ?string $look_id;

    public ?string $dashboard_id;
}
