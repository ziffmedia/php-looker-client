<?php

namespace ZiffMedia\Looker\Type;

class LDAPConfig
{
    public readonly array $can;

    public bool $alternate_email_login_allowed;

    public ?string $auth_password;

    public bool $auth_requires_role;

    public ?string $auth_username;

    public ?string $connection_host;

    public ?string $connection_port;

    public bool $connection_tls;

    public bool $connection_tls_no_verify;

    public ?array $default_new_user_group_ids;

    public readonly ?array $default_new_user_groups;

    public ?array $default_new_user_role_ids;

    public readonly ?array $default_new_user_roles;

    public bool $enabled;

    public bool $force_no_page;

    public readonly ?array $groups;

    public ?string $groups_base_dn;

    public ?string $groups_finder_type;

    public ?string $groups_member_attribute;

    public ?string $groups_objectclasses;

    public ?string $groups_user_attribute;

    public ?array $groups_with_role_ids;

    public readonly bool $has_auth_password;

    public bool $merge_new_users_by_email;

    public readonly ?string $modified_at;

    public readonly ?string $modified_by;

    public bool $set_roles_from_groups;

    public ?string $test_ldap_password;

    public ?string $test_ldap_user;

    public ?string $user_attribute_map_email;

    public ?string $user_attribute_map_first_name;

    public ?string $user_attribute_map_last_name;

    public ?string $user_attribute_map_ldap_id;

    public readonly ?array $user_attributes;

    public ?array $user_attributes_with_ids;

    public ?string $user_bind_base_dn;

    public ?string $user_custom_filter;

    public ?string $user_id_attribute_names;

    public ?string $user_objectclass;

    public bool $allow_normal_group_membership;

    public bool $allow_roles_from_normal_groups;

    public bool $allow_direct_roles;

    public readonly ?string $url;
}
