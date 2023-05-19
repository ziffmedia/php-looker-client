<?php

namespace ZiffMedia\Looker\Type;

class LDAPUser
{
    public readonly ?array $all_emails;

    public readonly ?array $attributes;

    public readonly ?string $email;

    public readonly ?string $first_name;

    public readonly ?array $groups;

    public readonly ?string $last_name;

    public readonly ?string $ldap_dn;

    public readonly ?string $ldap_id;

    public readonly ?array $roles;

    public readonly ?string $url;
}
