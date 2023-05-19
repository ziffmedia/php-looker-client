<?php

namespace ZiffMedia\Looker\Type;

class User
{
    public readonly array $can;

    public readonly ?string $avatar_url;

    public readonly ?string $avatar_url_without_sizing;

    public readonly ?array $credentials_api3;

    public null $credentials_email;

    public readonly ?array $credentials_embed;

    public null $credentials_google;

    public null $credentials_ldap;

    public null $credentials_looker_openid;

    public null $credentials_oidc;

    public null $credentials_saml;

    public null $credentials_totp;

    public readonly ?string $display_name;

    public readonly ?string $email;

    public readonly ?string $embed_group_space_id;

    public ?string $first_name;

    public readonly ?array $group_ids;

    public ?string $home_folder_id;

    public readonly string $id;

    public bool $is_disabled;

    public ?string $last_name;

    public ?string $locale;

    public readonly ?array $looker_versions;

    public ?bool $models_dir_validated;

    public readonly ?string $personal_folder_id;

    public readonly bool $presumed_looker_employee;

    public readonly ?array $role_ids;

    public readonly ?array $sessions;

    public ?array $ui_state;

    public readonly bool $verified_looker_employee;

    public readonly bool $roles_externally_managed;

    public readonly bool $allow_direct_roles;

    public readonly bool $allow_normal_group_membership;

    public readonly bool $allow_roles_from_normal_groups;

    public readonly ?string $embed_group_folder_id;

    public readonly bool $is_iam_admin;

    public readonly ?string $url;
}
