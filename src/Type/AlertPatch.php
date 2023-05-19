<?php

namespace ZiffMedia\Looker\Type;

class AlertPatch
{
    public ?string $owner_id;

    public ?bool $is_disabled;

    public ?string $disabled_reason;

    public ?bool $is_public;

    public ?int $threshold;
}
