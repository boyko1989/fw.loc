<?php
$query = rtrim(ltrim($_SERVER['REQUEST_URI'], '/'), '/');

require '../vendor/core/Router.php';
require '../vendor/libs/functions.php';

//Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
//Router::add('posts', ['controller' => 'Posts', 'action' => 'index']);
//Router::add('', ['controller' => 'Main', 'action' => 'index']);

Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('[a-z-]+/[a-z-]+', ['controller' => 'Main', 'action' => 'index']);

// Коммент с Redmi

debug(Router::getRoutes());

if(Router::matchRoute($query)) {
    debug(Router::getRoute());
} else {
    echo '404';
}
