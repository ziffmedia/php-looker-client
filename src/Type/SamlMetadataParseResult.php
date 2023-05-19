<?php

namespace ZiffMedia\Looker\Type;

class SamlMetadataParseResult
{
    public readonly array $can;

    public readonly ?string $idp_issuer;

    public readonly ?string $idp_url;

    public readonly ?string $idp_cert;
}
