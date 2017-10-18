<?php

 require_once 'DAL.php';
?>

 <?php


  class Phone {
      
        private $id_phone;
        private $model;
        private $phone_manufactor_code;

    public function __construct ($id_phone, $model, $phone_manufactor_code ){

            $this->id_phone = $id_phone;
            $this->model = $model;
            $this->phone_manufactor_code = $phone_manufactor_code ;

      }

      public function show_phones(){
                   $Dal= new DAL();
                   $aaa = $Dal->executeStatement('SELECT * FROM cellular.phone');
                   $aaa = json_encode($aaa);
                   return $aaa ;


      }
        
    }

 // $Phone= new Phone(null,null,null);
 

 //      $arr = $Phone->show_phones();
    //   var_dump($arr) 
    ?>