<?php

namespace ZiffMedia\Looker\Type;

class SmtpNodeStatus
{
    public readonly bool $is_valid;

    public readonly ?string $message;

    public readonly ?string $hostname;
}
