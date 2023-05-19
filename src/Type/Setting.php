<?php

namespace ZiffMedia\Looker\Type;

class Setting
{
    public bool $extension_framework_enabled;

    public bool $extension_load_url_enabled;

    public bool $marketplace_auto_install_enabled;

    public bool $marketplace_enabled;

    public null $privatelabel_configuration;

    public null $custom_welcome_email;

    public bool $onboarding_enabled;

    public string $timezone;

    public bool $allow_user_timezones;

    public bool $data_connector_default_enabled;

    public string $host_url;

    public bool $override_warnings;

    public array $email_domain_allowlist;

    public bool $embed_cookieless_v2;
}
