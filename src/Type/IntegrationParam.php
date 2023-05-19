<?php

namespace ZiffMedia\Looker\Type;

class IntegrationParam
{
    public ?string $name;

    public readonly ?string $label;

    public readonly ?string $description;

    public readonly bool $required;

    public readonly bool $has_value;

    public ?string $value;

    public ?string $user_attribute_name;

    public readonly ?bool $sensitive;

    public readonly bool $per_user;

    public readonly ?string $delegate_oauth_url;
}
