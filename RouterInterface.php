<?php

namespace Bulldog;

use Psr\Http\Message\ServerRequestInterface;

interface RouterInterface
{
    public function addRoute($method, $uri, $callable);

    public function get($uri, $callable);

    public function post($uri, $callable);

    public function delete($uri, $callable);

    public function put($uri, $callable);

    public function run(ServerRequestInterface $request);
}
