<?php

namespace ZiffMedia\Looker\Type;

class ProjectValidation
{
    public readonly ?array $errors;

    public readonly ?string $project_digest;

    public readonly ?array $models_not_validated;

    public readonly ?int $computation_time;
}
