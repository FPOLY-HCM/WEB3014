<?php

namespace Core;

class Application
{
    protected Router $router;

    protected Request $request;

    public function __construct()
    {
        $this->router = new Router();
        $this->request = new Request();
    }

    public function run(): void
    {
        echo $this->router->resolve();
    }
}