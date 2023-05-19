<?php

namespace ZiffMedia\Looker\Type;

class PasswordConfig
{
    public readonly array $can;

    public ?int $min_length;

    public bool $require_numeric;

    public bool $require_upperlower;

    public bool $require_special;
}
