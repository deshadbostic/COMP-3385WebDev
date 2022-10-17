<?php 

 class IndexController extends Controller
{
public function getALL():array{
return [2,3,4,5];
}

 public function getRecord(String $id):array{
    return [2,3,4,5];
 }


 public function run(){
   $this -> setView(new View()); 

        $this ->view->setTemplate(TPL_DIR.'\index' .'.tpl.php');
$this->setModel(new IndexModel());

$this->model->attach($this->view);
$data=$this->model->getAll();
// $this->model->update($data);
$this->model->notify();

$this -> view -> display();
 }
}

?>