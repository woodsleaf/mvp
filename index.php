<?php
namespace App;
use App\Models\Model;
use App\Views\View;

require 'vendor\autoload.php';
//require 'AutoPSR-4.php';
$model = new Model();
$view = new View();
$presenter = new Presenters\Presenter($model, $view);
echo $presenter->indexAction();
