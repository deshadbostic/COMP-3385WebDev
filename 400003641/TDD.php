<?php


use PhpUnit\Framework\TestCase;
//Use SignUpModel, ContactModel,LoginModel,HomepageModel,AboutusModel,ProductsModel; //wrong
// spl_autoload_register(function ($class_name) {
//     include "../model/".$class_name . '.php';
//     });

    include './Model/SignupModel.php';
    include './Model/CoursesModel.php';
    include './Model/LoginModel.php';
    include './Model/ProfileModel.php';
    include './Model/IndexModel.php';

    include './Controller/SignupController.php';
    include './Controller/CoursesController.php';
    include './Controller/LoginController.php';
    include './Controller/ProfileController.php';
    include './Controller/IndexController.php';

    include './View/SignupView.php';
    include './View/CoursesView.php';
    include './View/LoginView.php';
    include './View/ProfileView.php';
    include './View/IndexView.php';

class TDD extends TestCase{

public function Setup():void{
    $this->sm=new SignupModel();
    $this->cm=new CoursesModel();
    $this->lm=new LoginModel();
    $this->im=new IndexModel();
    $this->pm=new ProfileModel();


    $this->sc=new SignupController();
    $this->cc=new CoursesController();
    $this->lc=new LoginController();
    $this->ic=new IndexController();
    $this->pc=new ProfileController();

    $this->sv=new SignupView();
    $this->cv=new CoursesView();
    $this->lv=new LoginView();
    $this->iv=new IndexView();
    $this->pv=new ProfileView();

    $this->S=new SessionClass();
 
    }

public function tearDown():void{
    unset($this->cm);
    unset($this->sm);
    unset($this->hm);
    unset($this->lm);
    unset($this->am);
    unset($this->pm);

    unset($this->sc);
    unset($this->cc);
    unset($this->lc);
    unset($this->ic);
    unset($this->pc);

    unset($this->cv);
    unset($this->sv);
    unset($this->hv);
    unset($this->lv);
    unset($this->av);
    unset($this->pv);

    unset($this->S);
    }

// public function testinsertRecord():void{
   //        //arrange
   //        $hey=array("name"=>"jeff","email"=>"jeff.email.com","password"=>"password");
   //    $objl=(object)$hey;
   //    // print_r($obj);
   //    //     stdClass Object(
   //    //    [name] => Deepak
   //    //    [age] => 21
   //    //    [marks] => 75
   //    // )
   //     //act
   //    $obj= $this->sm->insertRecord(objl);
   //      //assert
   //      $this->assertEquals(
   //         true,
   //         $obj,
   //         'insert failed'
   //      );


   //        //arrange
      //        $hey=array("email"=>"jeff.email.com","message"=>"hello i need help with the product");
   //        $objl=(object)$hey;
   //         //contact form data
   //     //act
   //     $obj= $this->cm->insertRecord(objl);
   //     //assert
   //     $this->assertEquals(
   //        true,
   //        $obj,
   //        'insert failed'
   //     );

   // }

   // public function testinsertUniqueRecord():void{
   //     //arrange
   //    $email="jeff.seid@gmail.com";
   //    // UPDATE Employee SET BirthDate  = '1990-07-23' WHERE Name = "Alan";
   //     //act
   //    $obj= $this->sm->insertUniqueRecord($email);
   //      //assert
   //      $this->assertEquals(
   //         true,
   //         $obj,
   //         'user already exsists'
   //      );
   
   //    //arrange
   
   //    // UPDATE Employee SET BirthDate  = '1990-07-23' WHERE Name = "Alan";
   //     //act
   //    $obj= $this->cm->insertUniqueRecord($email);
   //      //assert
   //      $this->assertEquals(
   //         true,
   //         $obj,
   //         'user does not exsist'
   //      );

   // }
public function testIsObjectM():void{
      //act
      $obj= $this->pm;

      //assert
      $this->assertTrue(
         is_a($obj,'ProfileModel'),
         'Profile model not created'
      );
         
         //act
         $obj= $this->im;

         //assert
         $this->assertTrue(
            is_a($obj,'IndexModel'),
            'Index model not created'
         );
         
            //act
      $obj= $this->sm;

      //assert
      $this->assertTrue(
         is_a($obj,'SignupModel'),
         'Signup model not created'
      );
         
         //act
         $obj= $this->lm;

         //assert
         $this->assertTrue(
            is_a($obj,'LoginModel'),
            'Login model not created'
         );
         
            //act
      $obj= $this->cm;

      //assert
      $this->assertTrue(
         is_a($obj,'CoursesModel'),
         'Courses model not created'
      );
         
  
}
public function testGetAll():void{

      //arrange

       //act
    $obj= $this->pm->getAll();
    //assert
    $this->assertIsArray(
       $obj,
       'not all records pulled'
    );

    $obj= $this ->cm->getAll();
    $this->assertIsArray(
      $obj,
      'not all records pulled'
   );
    
      //arrange

    //act
    $obj= $this ->lm->getAll();
    //assert
    $this->assertIsArray(
      $obj,
      'not all records pulled'
   );
      //arrange

    //act
    $obj= $this->sm->getAll();
    //assert
    $this->assertIsArray(
      $obj,
      'not all records pulled'
   );

      //arrange

    //act
    $obj= $this->im->getAll();
    //assert
    $this->assertIsArray(
      $obj,
      'not all records pulled'
   );
     
}
public function testgetRecord(){
    
    //arrange
      $id="mymoneyisbigmp3";
      // $objl=(object)$arr;
   try{
       $obj= $this->im->getRecord($id);
       $this->assertIsArray(
         $obj,
         'not all records pulled'
      );
   }catch(Exception $e){
      this->assertTrue(0,"id is not a valid value for getRecord Index model ");
   }

   try{
      $obj= $this->sm->getRecord($id);
      $this->assertIsArray(
         $obj,
         'not all records pulled'
      );
   }catch(Exception $e){
     this->assertTrue(0,"id is not a valid value for getRecord Index model ");
   }
   $id=1;
   try{
      $obj= $this->lm->getRecord($id);
      $this->assertIsArray(
         $obj,
         'not all records pulled'
      );
   }catch(Exception $e){
   this->assertTrue(0,"id is not a valid value for getRecord Index model ");
   }  

   try{
      $obj= $this->cm->getRecord($id);
      $this->assertIsArray(
         $obj,
         'not all records pulled'
      );
   }catch(Exception $e){
     this->assertTrue(0,"id is not a valid value for getRecord Index model ");
   }

   try{
      $obj= $this->pm->getRecord($id);
      $this->assertIsArray(
         $obj,
         'not all records pulled'
      );
   }catch(Exception $e){
     this->assertTrue(0,"id is not a valid value for getRecord Index model ");
   }
}
public function testAttach(){

}

public function testDetach(){
  
}
public function testNotify(){
  
}
public function testIsObjectC():void{
   //act
   $obj= $this->pc;

   //assert
   $this->assertTrue(
      is_a($obj,'Controller'),
      'Profile controller not created'
   ); 
      //act
      $obj= $this->cc;

      //assert
      $this->assertTrue(
         is_a($obj,'Controller'),
         'Courses controller not created'
      ); 
         //act
   $obj= $this->sc;

   //assert
   $this->assertTrue(
      is_a($obj,'Controller'),
      'Signup controller not created'
   ); 
      //act
      $obj= $this->lc;

      //assert
      $this->assertTrue(
         is_a($obj,'Controller'),
         'Login controller not created'
      ); 
         //act
   $obj= $this->ic;

   //assert
   $this->assertTrue(
      is_a($obj,'Controller'),
      'Index controller not created'
   ); 

}

public function testRunandsetViewandsetModel(){

  //act
  $obj= $this->pc->setView($this->pv);
    
    $obj= $this->pc->setModel($this->pm);  

    try{
  $obj= $this->pc->run();
  }catch(Exception $e){
      this->assertTrue(0,"model or view was not set correctly");
   }


  //act
 $obj= $this->sc->setView($this->sv);

 $obj= $this->sc->setModel($this->sm);

     try{
      $obj= $this->sc->run();
      }catch(Exception $e){
          this->assertTrue(0,"model or view was not set correctly");
       }

  //act
  $obj= $this->lc->setView($this->lv);

  $obj= $this->lc->setModel($this->lm);

   try{
    $obj= $this->lc->run();
    }catch(Exception $e){
        this->assertTrue(0,"model or view was not set correctly");
     }

  //act
 $obj= $this->ic->setView($this->iv);

 $obj= $this->ic->setModel($this->im);

       try{
        $obj= $this->ic->run();
        }catch(Exception $e){
            this->assertTrue(0,"model or view was not set correctly");
         }

  //act
  $obj= $this->cc->setView($this->cv);
  
  $obj= $this->cc->setModel($this->cm);

   try{
          $obj= $this->cc->run();
          }catch(Exception $e){
              this->assertTrue(0,"model or view was not set correctly");
           }
}
public function testIsObjectV():void{
      //act
      $obj= $this->pv;

      //assert
      $this->assertTrue(
         is_a($obj,'View'),
         'Profile view not created'
      );
         //act
         $obj= $this->iv;

         //assert
         $this->assertTrue(
            is_a($obj,'View'),
            'index view not created'
         );
             //act
               $obj= $this->lv;

            //assert
            $this->assertTrue(
            is_a($obj,'View'),
            'login view not created'
                  );

         //act
         $obj= $this->cv;

         //assert
         $this->assertTrue(
            is_a($obj,'View'),
            'Courses view not created'
         );
            //act
              $obj= $this->sv;

            //assert
              $this->assertTrue(
               is_a($obj,'View'),
               'Signup view not created'
                );
  
}
// public function testfindRecord():void{

   //     //arrange
   //       $id=5;
   //       $arr=array("id"=>5, "name"=>"Stove", "desc"=>"Gas 300inch","rec"=>876,"count"=>6334,"location"=>"stove.jpg");
   //       $objl=(object)$arr;
   //     //act
   //     $obj= $this->pm->findRecord($id);
   //     //assert
   //     $this->assertEquals(
   //       $objl, 
   //        $obj,
   //        'Product not found'
   //     );

   //       //arrange
   //       $id=1;
   //     //act
   //     $obj= $this->am->findRecord($id);
   //     //assert
   //     $this->assertEquals(
   //        "Welcome to TFG Cooperation!

   //         We at TFG are proud...",
   //        $obj,
   //        'Record not found gracefully'
   //     );

   //       //arrange cat
   //       $id=4;
   //       $arr=array("cat"=>1, "prod"=>4);
   //       $objl=(object)$arr;
   //     //act
   //     $obj= $this->hm->findRecord($id);
   //     //assert
   //     $this->assertEquals(
   //        $objl,
   //        $obj,
   //        'Record not found'
   //     );

   //       //arrange
   //       $id="bob2@email.com";
   //       $arr=array("name"=>"bob", "email"=>"bob2@email.com", "pass"=>"password");
   //       $objl=(object)$arr;
   //     //act
   //     $obj= $this->lm->findRecord($id);
   //     //assert
   //     $this->assertEquals(
   //        $objl,
   //        $obj,
   //        'Record not found'
   //     );



   // }

public function testSetTemplateandDisplay():void{
   
   //arrange
   $filename="TonkerTruck";

    //act
    try{
      $obj= $this->pv->setTemplate($filename);
  
  }catch(Exception $e){
     this->assertTrue(0,"filename is not a valid entry");
  }
  try{
    //act
    $obj= $this->pv->display();
    //assert
    $this->assertIsString(
       $obj,
       'this is not a string in pv'
    );
  }catch(Exception $e){
    this->assertTrue(0,"the template was not set ");
  }
    

        try{
          $obj= $this->lv->setTemplate($filename);
        
      }catch(Exception $e){
         this->assertTrue(0,"filename is not a valid entry");
      }
      try{
           $obj= $this->lv->display();
           //assert
           $this->assertIsString(
              $obj,
              'this is not a string in lv'
           );
      }catch(Exception $e){
        this->assertTrue(0,"the template was not set ");
      }



      try{
        $obj= $this->sv->setTemplate($filename);
      
      }catch(Exception $e){
       this->assertTrue(0,"filename is not a valid entry");
      }
      try{
      
      //act
      $obj= $this->sv->display();
      //assert
      $this->assertIsString(
      $obj,
      'this is not a string in sv'
      );
      }catch(Exception $e){
      this->assertTrue(0,"the template was not set ");
      }



      try{
        $obj= $this->cv->setTemplate($filename);
      
      }catch(Exception $e){
       this->assertTrue(0,"filename is not a valid entry");
      }
      try{
      
             //act
             $obj= $this->cv->display();
             //assert
             $this->assertIsString(
                $obj,
                'this is not a string in cv'
             );
      }catch(Exception $e){
      this->assertTrue(0,"the template was not set ");
      }

      try{
        $obj= $this->iv->setTemplate($filename);
      
      }catch(Exception $e){
       this->assertTrue(0,"filename is not a valid entry");
      }
      try{
      
        //act
        $obj= $this->iv->display();
        //assert
        $this->assertIsString(
           $obj,
           'this is not a string in iv'
        );
      }catch(Exception $e){
      this->assertTrue(0,"the template was not set ");
      }

  }

public function testDisplay():void{
      //arrange

          //act
          $obj= $this->pv->display();
          //assert
          $this->assertIsString(
             $obj,
             'this is not a string in pv'
          );
             //act
             $obj= $this->lv->display();
             //assert
             $this->assertIsString(
                $obj,
                'this is not a string in lv'
             );
                //act
          $obj= $this->sv->display();
          //assert
          $this->assertIsString(
             $obj,
             'this is not a string in sv'
          );
             //act
             $obj= $this->cv->display();
             //assert
             $this->assertIsString(
                $obj,
                'this is not a string in cv'
             );
                //act
          $obj= $this->iv->display();
          //assert
          $this->assertIsString(
             $obj,
             'this is not a string in iv'
          );
        
    }
public function testAddVar():void{
//arrange
   $value = "manay";
   $string1="water";
    //act
    try{
      $obj= $this->pv->addvar($string1,$value);
      //assert
      $this->assertEquals(
         $obj,
         'var was not sucessfully added to pv template'
      );
  }catch(Exception $e){
     this->assertTrue(0,"id is not a valid value for getRecord Index model ");
  }

    
        //act
        $obj= $this->lv->addvar($string1,$value);
        //assert
        $this->assertEquals(
           $obj,
           'var was not sucessfully added to lv template'
        );
    
            //act
    $obj= $this->sv->addvar($string1,$value);
    //assert
    $this->assertEquals(
       $obj,
       'var was not successfully added to sv template'
    );
    
        //act
        $obj= $this->cv->addvar($string1,$value);
        //assert
        $this->assertEquals(
           $obj,
           'var was not sucessfully added to cv template'
        );
    
            //act
    $obj= $this->iv->addvar($string1,$value);
    //assert
    $this->assertEquals(
       $obj,
       'var was not sucessfully added to iv template'
    );


}


public function testIsObjectS():void{
   //act
   $obj= $this->S;

   //assert
   $this->assertTrue(
      is_a($obj,'SessionClass'),
      'Session Object not created'
   );
}

public function testCeateandDestroy():void{
   $obj= $this->S->create();
   try {
       $obj= $this->S->destroy();
   }catch(Exception $e){
      this->assertTrue(0,"Session was not created and thus could not be destroyed");
   }
  
}

public function testAdd():void{
      //arange
      $name="hothothot";
      $value="hothothot";
      try{
         $obj= $this->S->add($name,$value);
     }catch(Exception $e){
        this->assertTrue(0,"Parameters are causing a problem in Add method in Session Class ");
     }
}

public function testAddandRemove():void{
       //arange
       $name="hothothot";
       $value="hothothot";
       try{
          $obj= $this->S->add($name,$value);
      }catch(Exception $e){
         this->assertTrue(0,"Parameters are causing a problem in Add method in Session Class ");
      }

   try{
      $obj= $this->S->remove($name);
  }catch(Exception $e){
     this->assertTrue(0,"Name parameter is causing a problem in Remove method this is not a variable in Session Class  ");
  }
}

public function testAccessible():void{
  //arange
  $user="hothothot";
  $page="hothothot";
  try{
     $obj= $this->S-accessible($user,$page);

     $this->assertIsBool(
      $obj,
      'the accesible method failed'
   );
 }catch(Exception $e){
    this->assertTrue(0,"Parameters are causing a problem in Accesible method in Session Class ");
 }
}
}

?>