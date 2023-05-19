<?php

namespace ZiffMedia\Looker\Type;

class Datagroup
{
    public readonly array $can;

    public readonly ?int $created_at;

    public readonly string $id;

    public readonly ?string $model_name;

    public readonly ?string $name;

    public ?int $stale_before;

    public readonly ?int $trigger_check_at;

    public readonly ?string $trigger_error;

    public readonly ?string $trigger_value;

    public ?int $triggered_at;
}
