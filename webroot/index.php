<?php 

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('WEBROOT', 'http://localhost/mvc01');
define('VIEWS_PATH', ROOT.DS.'Views');

require_once (ROOT.DS.'Lib'.DS.'init.php');

/*
$router = new Router (str_replace("/mvc01","",$_SERVER['REQUEST_URI']));

echo "<pre>";

print_r('Route: '.$router->getRoute().PHP_EOL);
print_r('Language: '.$router->getLanguage().PHP_EOL);
print_r('Controller: '.$router->getController().PHP_EOL);
print_r('Action to be called: '.$router->getMethod_prefix().$router->getAction().PHP_EOL);
echo "Params: ";
print_r($router->getParams());
*/

App::run(str_replace("/mvc01","",$_SERVER['REQUEST_URI']));
