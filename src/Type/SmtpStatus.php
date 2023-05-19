<?php

namespace ZiffMedia\Looker\Type;

class SmtpStatus
{
    public readonly bool $is_valid;

    public readonly ?int $node_count;

    public readonly ?array $node_status;
}
