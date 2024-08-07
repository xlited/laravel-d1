<?php

namespace XliteDev\LaravelD1;

use Saloon\Contracts\Connector;
use Saloon\Http\Request;

abstract class CloudflareRequest extends Request
{
    protected CloudflareConnector $connector;

    public function __construct($connector)
    {
        $this->connector = $connector;
    }

    protected function resolveConnector(): Connector
    {
        return $this->connector;
    }
}
