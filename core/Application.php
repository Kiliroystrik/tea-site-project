<?php

namespace app\core;

class Application
{
    public $router;
    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        //todo
    }
}
