<?php

namespace ZiffMedia\Looker\Type;

class AlertDestination
{
    public string $destination_type;

    public ?string $email_address;

    public ?string $action_hub_integration_id;

    public ?string $action_hub_form_params_json;
}
