<?php

class KontrolaPrijave extends Prijava{

    private $uid;
    private $pwd;
    

    public function __construct($uid,  $pwd){
        $this->uid = $uid;
        $this->pwd = $pwd;
    }
    public function prijavaUporabnika(){
       if($this->prazenVnos() == false){
            header("location: ../index.php?napaka=prazenVnos");
            exit();
       }

        $this->getUser($this->uid,$this->pwd);
             
    }

    private function prazenVnos(){
        $rezultat;
        if(empty($this->uid) || empty($this->pwd) ){
            $rezultat = false;
        }else{
            $rezultat = true;
        }
        return $rezultat;
    }
  
}
?>