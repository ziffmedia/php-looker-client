<?php

namespace ZiffMedia\Looker\Type;

class ContentValidatorError
{
    public null $look;

    public null $dashboard;

    public null $dashboard_element;

    public null $dashboard_filter;

    public null $scheduled_plan;

    public null $alert;

    public null $lookml_dashboard;

    public null $lookml_dashboard_element;

    public readonly ?array $errors;

    public readonly string $id;
}
