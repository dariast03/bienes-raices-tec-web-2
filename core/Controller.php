<?php
class Controller
{
    protected function view($name, $data = [])
    {
        extract($data);
        require_once "../views/$name.php";
    }
}
