<?php
namespace App\Models;

class Model
{
    public function __construct()
    {
        echo 'Model ';
    }
    public function getSomeStuff()
    {
        return array('foo' => 'bar');
    }
}
