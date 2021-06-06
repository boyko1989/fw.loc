<?php
$query = rtrim(ltrim($_SERVER['REQUEST_URI'], '/'), '/');
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');

require '../vendor/core/Router.php';
require '../vendor/libs/functions.php';
//require '../app/controllers/Main.php';
//require '../app/controllers/Posts.php';
//require '../app/controllers/PostsNew.php';

spl_autoload_register(function($class){
    $file = APP . "/controllers/$class.php";
    if(is_file($file)){
        require_once $file;
    }
});

Router::add('^pages/?(?P<action>[a-z-]+)?$', ['controller' => 'Posts']);

// defaults routs
Router::add('^$', ['controller' => 'Main', 'action' => 'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');

// Коммент с Redmi
// Данный комментарий из редактора QuickEdit для Android
// Считаю для себя этот редактор наилучшим вариантом для удалённой разработки

debug(Router::getRoutes());

Router::dispatch($query);