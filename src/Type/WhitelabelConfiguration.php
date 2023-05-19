<?php

namespace ZiffMedia\Looker\Type;

class WhitelabelConfiguration
{
    public readonly string $id;

    public ?string $logo_file;

    public readonly ?string $logo_url;

    public ?string $favicon_file;

    public readonly ?string $favicon_url;

    public ?string $default_title;

    public bool $show_help_menu;

    public bool $show_docs;

    public bool $show_email_sub_options;

    public bool $allow_looker_mentions;

    public bool $allow_looker_links;

    public bool $custom_welcome_email_advanced;

    public bool $setup_mentions;

    public bool $alerts_logo;

    public bool $alerts_links;

    public bool $folders_mentions;
}
