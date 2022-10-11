<?php 
require_once('Controller.php');

 class IndexController extends Controller
{
public function getALL():array{
return [2,3,4,5];
}

 public function getRecord(String $id):array{
    return [2,3,4,5];
 }


 public function run(){
  $v->setTemplate(Tpl_Dir.'/index' .'.tpl.php');
$this->setModel(new IndexModel());
$this->setView($v);

$this->model->attach($this->view);
$data=$this->model->getAll();
$this->model->update($data);
$this->model->notify;
 }
}

?>