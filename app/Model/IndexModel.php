<?php 
require_once('Model.php');

 class IndexModel extends Model
{
public function getALL():array{
   $filename = basename('courses.json' ) ;
   if (isset($this->cached_json[$filename]) || empty($this->cached_json[$filename])){
      $json_file=file_get_contents('courses.json') ;
   $this->cached_json[$filename]= json_decode($json_file,true) ;
   } 
   // this getA11 will return all the courses
   $data = $this->cached_json ;
   // next stage, get most popular and most favourite
   $popular_column = array_column($data[ 'courses '], 3);
   $recommended_column = array_column($data[ ' courses ' ] , 2);
   $extra = $data[ 'courses' ] ;
   array_multisort($recommended_column, SORT_DESC, $data[ 'courses ']);
   $recommended =array_slice($data[ 'courses ' ] , 0, 8);
   array_multisort($popular_column,SORT_DESC, $extra) ;
   $popular =array_slice($extra, 0, 8);
   return [ $popular  ,$recommended];
   // next stage, get the instructors
}

 public function getRecord(String $id):array{
    return [2,3,4,5];
 }

}

?>