<?php 


abstract class Model implements SplSubject
{
    public $state;
    private $observers;
    protected $updateddata = [];
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

    public function Update(){
          $this -> updateddata = $data;
    }
    public function someBusinessLogic(): void
    {
        echo "\nSubject: I'm doing something important.\n";
        $this->state = rand(0, 10);

        echo "Subject: My state has just changed to: {$this->state}\n";
        $this->notify();
    }

    public function getALL():array{
        
        return [2,3,4,5];
        }
    public function getRecord(String $id):array{
            return [2,3,4,5];
         }
}

 
?>