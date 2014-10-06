<?php 
session_start();

define('BASE_PATH', dirname(__FILE__));

class App{
    public static $config = null;

    public static function getConfig($key) {
        if(self::$config === null) {
            self::$config = include_once('app/config/main.php');
        }

        return isset(self::$config[$key]) ? self::$config[$key] : false;
    }
}

function my_autoloader($class) {
    if(file_exists('app/model/' . $class . '.php')) {
        include_once 'app/model/' . $class . '.php';
    } elseif(file_exists('app/controller/' . $class . '.php')){
        include_once 'app/controller/' . $class . '.php';
    }
}

spl_autoload_register('my_autoloader');

$route = ucfirst($_GET['r']) . 'Controller'; // UserController
$action = $_GET['a']; //registration

if (empty($route) || empty($action))
{
    $route = 'HomeController';
    $action = 'index';
}

$controller = new $route;
$controller->{$action}();
