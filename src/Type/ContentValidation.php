<?php

namespace ZiffMedia\Looker\Type;

class ContentValidation
{
    public readonly ?array $content_with_errors;

    public readonly ?int $computation_time;

    public readonly ?int $total_looks_validated;

    public readonly ?int $total_dashboard_elements_validated;

    public readonly ?int $total_dashboard_filters_validated;

    public readonly ?int $total_scheduled_plans_validated;

    public readonly ?int $total_alerts_validated;

    public readonly ?int $total_explores_validated;
}
