<?php

namespace ZiffMedia\Looker\Type;

class Project
{
    public readonly array $can;

    public readonly string $id;

    public string $name;

    public readonly bool $uses_git;

    public ?string $git_remote_url;

    public ?string $git_username;

    public ?string $git_password;

    public string $git_production_branch_name;

    public bool $use_git_cookie_auth;

    public ?string $git_username_user_attribute;

    public ?string $git_password_user_attribute;

    public ?string $git_service_name;

    public ?int $git_application_server_http_port;

    public ?string $git_application_server_http_scheme;

    public ?string $deploy_secret;

    public bool $unset_deploy_secret;

    public string $pull_request_mode;

    public bool $validation_required;

    public bool $git_release_mgmt_enabled;

    public bool $allow_warnings;

    public readonly bool $is_example;

    public ?string $dependency_status;
}
