<?php

namespace ZiffMedia\Looker\Type;

class DataActionResponse
{
    public readonly ?string $webhook_id;

    public readonly bool $success;

    public readonly bool $refresh_query;

    public null $validation_errors;

    public readonly ?string $message;
}
