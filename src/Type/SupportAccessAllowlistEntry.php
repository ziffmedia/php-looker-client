<?php

namespace ZiffMedia\Looker\Type;

class SupportAccessAllowlistEntry
{
    public readonly string $id;

    public ?string $email;

    public readonly ?string $full_name;

    public ?string $reason;

    public readonly ?string $created_date;
}
