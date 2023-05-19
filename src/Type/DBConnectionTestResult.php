<?php

namespace ZiffMedia\Looker\Type;

class DBConnectionTestResult
{
    public readonly array $can;

    public readonly ?string $connection_string;

    public readonly ?string $message;

    public readonly ?string $name;

    public readonly ?string $status;
}
