<?php 
require_once('Model.php');

 class ProfileModel extends Model
{
public function getALL():array{
return [2,3,4,5];
}

 public function getRecord(String $id):array{
    return [2,3,4,5];
 }

}

?>