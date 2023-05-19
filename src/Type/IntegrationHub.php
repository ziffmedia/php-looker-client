<?php

namespace ZiffMedia\Looker\Type;

class IntegrationHub
{
    public readonly array $can;

    public readonly string $id;

    public string $url;

    public readonly string $label;

    public readonly bool $official;

    public readonly ?string $fetch_error_message;

    public ?string $authorization_token;

    public readonly bool $has_authorization_token;

    public readonly bool $legal_agreement_signed;

    public readonly bool $legal_agreement_required;

    public readonly ?string $legal_agreement_text;
}
