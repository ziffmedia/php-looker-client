<?php

namespace ZiffMedia\Looker\Type;

class ProjectWorkspace
{
    public readonly array $can;

    public readonly ?string $project_id;

    public readonly ?string $workspace_id;

    public readonly ?string $git_status;

    public readonly ?string $git_head;

    public readonly ?string $dependency_status;

    public null $git_branch;

    public readonly ?string $lookml_type;
}
