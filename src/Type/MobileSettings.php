<?php

namespace ZiffMedia\Looker\Type;

class MobileSettings
{
    public readonly bool $mobile_force_authentication;

    public readonly bool $mobile_app_integration;

    public readonly ?array $mobile_feature_flags;
}
