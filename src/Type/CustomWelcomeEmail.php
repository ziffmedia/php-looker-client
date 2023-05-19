<?php

namespace ZiffMedia\Looker\Type;

class CustomWelcomeEmail
{
    public bool $enabled;

    public ?string $content;

    public ?string $subject;

    public ?string $header;
}
