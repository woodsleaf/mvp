<?php
namespace App\Views;

class View
{
    public function __construct()
    {
        echo 'View ';
    }
    public function render($path, array $vars = array())
    {
        ob_start();
        extract($vars);
        include $path;
        return ob_get_clean();
    }
}
