<?php 
require_once('Controller.php');

 class ProfileController extends Controller
{
public function getALL():array{
return [2,3,4,5];
}

 public function getRecord(String $id):array{
    return [2,3,4,5];
 }


 public function run(){
    return ;
 }
}

?>