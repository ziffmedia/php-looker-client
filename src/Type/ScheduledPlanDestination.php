<?php

namespace ZiffMedia\Looker\Type;

class ScheduledPlanDestination
{
    public readonly string $id;

    public ?string $scheduled_plan_id;

    public ?string $format;

    public bool $apply_formatting;

    public bool $apply_vis;

    public ?string $address;

    public readonly bool $looker_recipient;

    public ?string $type;

    public ?string $parameters;

    public ?string $secret_parameters;

    public ?string $message;
}
