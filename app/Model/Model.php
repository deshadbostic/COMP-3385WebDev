<?php 


abstract class Model implements SplSubject
{
    public $state;
    private $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer)
    {
        // echo "Subject: Attached an observer.\n";
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer): void
    {
        $this->observers->detach($observer);
        // echo "Subject: Detached an observer.\n";
    }

    public function notify(): void
    {
        // echo "Subject: Notifying observers...\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
    public function someBusinessLogic(): void
    {
        echo "\nSubject: I'm doing something important.\n";
        $this->state = rand(0, 10);

        echo "Subject: My state has just changed to: {$this->state}\n";
        $this->notify();
    }

    public function getALL():array{

        // this getA11 will return all the courses
        $data = ($this->loaddata. '/ courses .json ' ) ;
        //return $data;
        // next stage, get most popular and most favourite
        $popular_column = array_column($data[ 'courses '], 3);
        $recommended_column = array_column($data[ ' courses ' ] , 2);
        $extra = $data[ 'courses' ] ;
        array_multisort($reccomended_column, SORT_DESC, $data[ 'courses ']);
        $recommended =array_slice($data[ 'courses ' ] , 0, 8);
        array_multisort($popular_column,SORT_DESC, $extra) ;
        $popular =array_slice($extra, 0, 8);
        return [ 'popular ' ,'recommended '];
        // next stage, get the instructors
        return [2,3,4,5];
        }
    public function getRecord(String $id):array{
            return [2,3,4,5];
         }

     public function loadData(string $fromFiIe):array{
         $filename = basename($fromFile,' .json ' ) ;
         if (isset($this->cached_json[$filename]) || empty($this->cached_json[$filename])) 
         $json_file=file_get_contents($fromFile) ;
         $this->cached_json[$filename]= json_decode($json_file,true) ;
         return $this->cached_json[$filename];
        
}
}

 
?>