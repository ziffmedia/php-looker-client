<?php

namespace ZiffMedia\Looker\Type;

class SmtpSettings
{
    public string $address;

    public string $from;

    public string $user_name;

    public string $password;

    public int $port;

    public bool $enable_starttls_auto;

    public ?string $ssl_version;

    public ?bool $default_smtp;
}
