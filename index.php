<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once 'config/web.php';

$request = $_SERVER['REQUEST_URI'];
$request = str_replace(BASE_PATH, '', $request);
$request = ltrim($request, '/');

switch ($request) {
    case '':
    case 'index.php':
        require __DIR__ . '/view/index.php';
        break;
    case 'about.php':
        require __DIR__ . '/view/about.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/view/404.php';
        break;
}
