<?php

namespace ZiffMedia\Looker\Type;

class ContentFavorite
{
    public readonly string $id;

    public string $user_id;

    public string $content_metadata_id;

    public readonly ?string $look_id;

    public readonly ?string $dashboard_id;

    public null $look;

    public null $dashboard;

    public readonly ?string $board_id;
}
