<?php

namespace ZiffMedia\Looker\Type;

class ApiSession
{
    public readonly array $can;

    public ?string $workspace_id;

    public readonly ?string $sudo_user_id;
}
