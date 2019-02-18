<?php
namespace App\Presenters;

class Presenter
{
    private $model;
    private $view;

    public function __construct($model, $view)  // Model $model, View $view
    {
        echo 'Presenter ';
        $this->model = $model;
        $this->view = $view;
    }

    public function indexAction()
    {
        $data = $this->model->getSomeStuff();
        // Значениея установлены и теперь формируем HTML в виде строки
        return $this->view->render('template.phtml', $data); //path/to/template.phtml
    }
}
