<?php

namespace ZiffMedia\Looker\Type;

class CredentialsLDAP
{
    public readonly array $can;

    public readonly ?string $created_at;

    public readonly ?string $email;

    public readonly bool $is_disabled;

    public readonly ?string $ldap_dn;

    public readonly ?string $ldap_id;

    public readonly ?string $logged_in_at;

    public readonly ?string $type;

    public readonly ?string $url;
}
