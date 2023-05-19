<?php

namespace ZiffMedia\Looker\Type;

class ProjectError
{
    public readonly ?string $code;

    public readonly ?string $severity;

    public readonly ?string $kind;

    public readonly ?string $message;

    public readonly ?string $field_name;

    public readonly ?string $file_path;

    public readonly ?int $line_number;

    public readonly ?string $model_id;

    public readonly ?string $explore;

    public readonly ?string $help_url;

    public readonly ?array $params;

    public readonly ?string $sanitized_message;
}
