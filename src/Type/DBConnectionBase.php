<?php

namespace ZiffMedia\Looker\Type;

class DBConnectionBase
{
    public readonly array $can;

    public readonly string $name;

    public null $dialect;

    public readonly array $snippets;

    public readonly bool $pdts_enabled;
}
