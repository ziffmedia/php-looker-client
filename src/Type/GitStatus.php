<?php

namespace ZiffMedia\Looker\Type;

class GitStatus
{
    public readonly ?string $action;

    public readonly bool $conflict;

    public readonly bool $revertable;

    public readonly ?string $text;
}
