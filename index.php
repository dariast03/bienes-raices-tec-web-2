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
        require 'view/client/index.php';
        break;
    case 'properties.php':
        require 'view/client/properties.php';
        break;
    case 'services.php':
        require 'view/client/services.php';
        break;
    case 'about.php':
        require 'view/client/about.php';
        break;
    case 'contact.php':
        require 'view/client/contact.php';
        break;
    case 'admin':
    case 'admin/index.php':
        require 'view/admin/index.php';
        break;
    case 'usuario/registro.php':
        require 'view/auth/registro.php';
        break;
    case 'admin/usuarios':
    case 'admin/usuarios.php':
        require 'view/admin/usuarios/index.php';
        break;
    case 'admin/propiedades':
    case 'admin/propiedades.php':
        require 'view/admin/properties/index.php';
        break;
    case 'admin/propiedades/form':
    case 'admin/propiedades/form.php':
        require 'view/admin/properties/form.php';
        break;
    case 'admin/tipos/lista':
    case 'admin/tipos/lista.php':
        require 'view/admin/tipos/lista.php';
        break;
    default:
        http_response_code(404);
        require 'view/404.php';
        break;
}
