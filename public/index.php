<?php


require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../bootstrap/app.php';


Trivial\Core\App::bind('router', Trivial\Core\Router::load('../app/routes.php'));


Trivial\Core\App::get('router')->direct(Trivial\Core\Request::uri(), Trivial\Core\Request::method());
