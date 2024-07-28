<?php
function debug($values)
{
    echo "<pre>";
    var_dump($values);
    echo "</pre>";
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once 'config/web.php';

$request = $_SERVER['REQUEST_URI'];
$request = str_replace(BASE_PATH, '', $request);
$request = ltrim($request, '/');

/* echo $request . "<br>";
exit; */

//TODO: Add more routes

switch ($request) {
    case '':
    case 'index.php':
        require __DIR__ . '/view/client/index.php';
        break;
    case 'about.php':
        require __DIR__ . '/view/client/about.php';
        break;
    case 'admin':
    case 'admin/index.php':
        require __DIR__ . '/view/admin/index.php';
        break;
    case 'admin/propiedades':
    case 'admin/propiedades.php':
        require __DIR__ . '/view/admin/properties.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/view/404.php';
        break;
}
