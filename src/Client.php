<?php

namespace ZiffMedia\Looker;

use Symfony\Component\HttpClient\HttpClient;

class Client
{
    protected HttpClient $httpClient;

    public function execute(AbstractRequest $request): Type
    {
        return new Type;
    }
}
