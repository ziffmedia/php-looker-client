<?php

namespace ZiffMedia\Looker\Type;

class SessionConfig
{
    public readonly array $can;

    public bool $allow_persistent_sessions;

    public ?int $session_minutes;

    public bool $unlimited_sessions_per_user;

    public bool $use_inactivity_based_logout;

    public bool $track_session_location;
}
