<?php

namespace ZiffMedia\Looker\Type;

class ContentValidationAlert
{
    public string $id;

    public ?string $lookml_dashboard_id;

    public ?string $lookml_link_id;

    public ?string $custom_url_base;

    public ?string $custom_url_params;

    public ?string $custom_url_label;

    public bool $show_custom_url;

    public ?string $custom_title;
}
