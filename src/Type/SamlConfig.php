<?php

namespace ZiffMedia\Looker\Type;

class SamlConfig
{
    public readonly array $can;

    public bool $enabled;

    public ?string $idp_cert;

    public ?string $idp_url;

    public ?string $idp_issuer;

    public ?string $idp_audience;

    public ?int $allowed_clock_drift;

    public ?string $user_attribute_map_email;

    public ?string $user_attribute_map_first_name;

    public ?string $user_attribute_map_last_name;

    public ?string $new_user_migration_types;

    public bool $alternate_email_login_allowed;

    public readonly ?string $test_slug;

    public readonly ?string $modified_at;

    public readonly ?string $modified_by;

    public readonly ?array $default_new_user_roles;

    public readonly ?array $default_new_user_groups;

    public ?array $default_new_user_role_ids;

    public ?array $default_new_user_group_ids;

    public bool $set_roles_from_groups;

    public ?string $groups_attribute;

    public readonly ?array $groups;

    public ?array $groups_with_role_ids;

    public bool $auth_requires_role;

    public readonly ?array $user_attributes;

    public ?array $user_attributes_with_ids;

    public ?string $groups_finder_type;

    public ?string $groups_member_value;

    public bool $bypass_login_page;

    public bool $allow_normal_group_membership;

    public bool $allow_roles_from_normal_groups;

    public bool $allow_direct_roles;

    public readonly ?string $url;
}
