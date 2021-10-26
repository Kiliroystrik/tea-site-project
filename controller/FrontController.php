<?php

class FrontController
{
    public function render($path)
    {
        $path = $path . ".php";
    }

    public function home()
    {
        $this->render('home/index');
    }
}
