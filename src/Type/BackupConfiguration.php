<?php

namespace ZiffMedia\Looker\Type;

class BackupConfiguration
{
    public readonly array $can;

    public ?string $type;

    public ?string $custom_s3_bucket;

    public ?string $custom_s3_bucket_region;

    public ?string $custom_s3_key;

    public ?string $custom_s3_secret;

    public readonly ?string $url;
}
