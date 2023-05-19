<?php

namespace ZiffMedia\Looker\Type;

class IntegrationTestResult
{
    public readonly bool $success;

    public readonly ?string $message;

    public readonly ?array $delegate_oauth_result;
}
