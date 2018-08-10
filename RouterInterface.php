<?php

namespace Bulldog;

interface RouterInterface
{
    public function addRoute($method, $uri, $callable);

    public function get($uri, $callable);

    public function post($uri, $callable);

    public function delete($uri, $callable);

    public function put($uri, $callable);

    public function run();
}
