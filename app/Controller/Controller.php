<?php 

abstract class Controller
{
    protected $model;
    protected $view;
 public function setModel(Model $m):void{
    $this -> model = $m;
 }

 public function setView(View $v):void{
    $this -> view = $v;
 }

abstract public function run();
}

?>