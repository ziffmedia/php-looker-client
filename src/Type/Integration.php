<?php

namespace ZiffMedia\Looker\Type;

class Integration
{
    public readonly array $can;

    public readonly string $id;

    public readonly string $integration_hub_id;

    public readonly string $label;

    public readonly ?string $description;

    public bool $enabled;

    public array $params;

    public readonly array $supported_formats;

    public readonly array $supported_action_types;

    public readonly array $supported_formattings;

    public readonly array $supported_visualization_formattings;

    public readonly array $supported_download_settings;

    public readonly ?string $icon_url;

    public readonly ?bool $uses_oauth;

    public readonly array $required_fields;

    public readonly ?string $privacy_link;

    public readonly ?bool $delegate_oauth;

    public array $installed_delegate_oauth_targets;
}
