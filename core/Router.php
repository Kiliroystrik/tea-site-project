<?php

namespace app\core;

define("URL", $_SERVER['REQUEST_URI']);
class Router
{
    protected $routes = [];
    public function __construct()
    {
        $this->routes;
    }

    public function route()
    {
        switch (URL) {
            case '/index.php':
                $path = "view/accueil.php";
                require_once 'template/template.php';
                break;
            case '/tea':
                $path = "view/tea.php";
                require_once 'template/template.php';
                break;
            case '/accueil':
                $path = "view/accueil.php";
                require_once 'template/template.php';
                break;
            case '/inscription':
                $path = "view/inscription.php";
                require_once 'template/template.php';
                break;

            default:
                $path = "view/accueil.php";
                require_once 'template/template.php';
                break;
        }
    }
}
