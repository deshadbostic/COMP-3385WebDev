<?php
 class View implements \SplObserver{
    private $vars = [];
    private $tpl = '';

    public function setTemplate(string $filename){
        $this -> tpl = $filename;
    }

    public function display(){
        extract($this -> vars);
        require $this -> tpl;
      }


      public function addVar($name, $value){
            if(preg_match()){
                trigger_error('invalid variable name used',E_USER_ERROR);
            }
            $this->data[$name]=$value;
      }
      public function update(\SplSubject $subject): void
      {
        
          if ($subject->state < 3) {
            //   echo "ConcreteObserverA: Reacted to the event.\n";
          }
      }
 }
?>