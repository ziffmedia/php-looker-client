<?php

namespace ZiffMedia\Looker\Type;

class AlertAppliedDashboardFilter
{
    public ?string $filter_title;

    public string $field_name;

    public string $filter_value;

    public readonly ?string $filter_description;
}
