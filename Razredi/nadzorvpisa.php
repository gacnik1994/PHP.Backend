<?php

class KontrolaVpisa extends Vpis{

    private $uid;
    private $email;
    private $pwd;
    private $pwdr;

    public function __construct($uid, $email, $pwd, $pwdr){
        $this->uid = $uid;
        $this->email = $email;
        $this->pwd = $pwd;
        $this->pwdr = $pwdr;
    }
    public function vpisUporabnika(){
       if($this->prazenVnos() == false){
            header("location: ../signup.php?napaka=prazenVnos");
            exit();
       }
       if($this->nepravilenUID() == false){
        header("location: ../signup.php?napaka=uporabnik");
        exit();
         }
         if($this->nepravilenEmail() == false){
            header("location: ../signup.php?napaka=email");
            exit();
        }
        if($this->pwdMatch() == false){
            header("location: ../signup.php?napaka=geslo");
            exit();
        }
        if($this->obstojecUporabnik() == false){
            header("location: ../signup.php?napaka=user");
            exit();
        }
        $this->setUser($this->uid,$this->pwd,$this->email);
             
    }

    private function prazenVnos(){
        $rezultat;
        if(empty($this->uid) || empty($this->email) || empty($this->pwd) || empty($this->pwdr) ){
            $rezultat = false;
        }else{
            $rezultat = true;
        }
        return $rezultat;
    }
    private function nepravilenUID(){
        $rezultat;
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->uid)){
            $rezultat = false;
        }else{
            $rezultat =  true;
        }
        return $rezultat;
    }
    private function nepravilenEmail(){
        $rezultat;
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL )){
            $rezultat = false;
        }else{
            $rezultat = true;
        }
        return $rezultat;
    }

    private function pwdMatch(){
        $rezultat;
        if($this->pwd !== $this->pwdr){
            $rezultat = false;
        }else{
            $rezultat = true;
        }
        return $rezultat;

    }

    private function obstojecUporabnik(){
        $rezultat;
        if(!$this->preveriUporabnika( $this->uid ,$this->email)){
            $rezultat = false;
        }else{
            $rezultat = true;
        }
        return $rezultat;

    }

}

?>