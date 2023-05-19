<?php

namespace ZiffMedia\Looker\Type;

class AlertNotifications
{
    public readonly string $notification_id;

    public readonly string $alert_condition_id;

    public readonly string $user_id;

    public bool $is_read;

    public readonly ?int $field_value;

    public readonly ?int $threshold_value;

    public readonly string $ran_at;

    public null $alert;
}
