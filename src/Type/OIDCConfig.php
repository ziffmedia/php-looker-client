<?php

namespace ZiffMedia\Looker\Type;

class OIDCConfig
{
    public readonly array $can;

    public bool $alternate_email_login_allowed;

    public ?string $audience;

    public bool $auth_requires_role;

    public ?string $authorization_endpoint;

    public ?array $default_new_user_group_ids;

    public readonly ?array $default_new_user_groups;

    public ?array $default_new_user_role_ids;

    public readonly ?array $default_new_user_roles;

    public bool $enabled;

    public readonly ?array $groups;

    public ?string $groups_attribute;

    public ?array $groups_with_role_ids;

    public ?string $identifier;

    public ?string $issuer;

    public readonly ?string $modified_at;

    public readonly ?string $modified_by;

    public ?string $new_user_migration_types;

    public ?array $scopes;

    public ?string $secret;

    public bool $set_roles_from_groups;

    public readonly ?string $test_slug;

    public ?string $token_endpoint;

    public ?string $user_attribute_map_email;

    public ?string $user_attribute_map_first_name;

    public ?string $user_attribute_map_last_name;

    public readonly ?array $user_attributes;

    public ?array $user_attributes_with_ids;

    public ?string $userinfo_endpoint;

    public bool $allow_normal_group_membership;

    public bool $allow_roles_from_normal_groups;

    public bool $allow_direct_roles;

    public readonly ?string $url;
}
