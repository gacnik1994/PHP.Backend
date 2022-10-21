<?php

     class Vpis extends Baza{

        protected function setUser($uid, $pwd, $email){
            $stmt = $this->connect()->prepare('INSERT INTO uporabnik (users_uid, users_pwd, users_email) VALUES (?,?,?);');

            $kodiranoGeslo = password_hash($pwd, PASSWORD_DEFAULT);

            if(!$stmt->execute(array($uid,$kodiranoGeslo, $email))){
                $stmt = null;
                header("location: ../index.php?napaka=stavekFailed");
                exit();
            }
            $stmt = null;
           
        }
        
        protected function preveriUporabnika($uid, $email){
            $stmt = $this->connect()->prepare("SELECT users_uid FROM uporabnik WHERE users_uid = ? OR users_email = ?;");

            if(!$stmt->execute(array($uid, $email))){
                $stmt = null;
                header("location: ../index.php?napaka=stavekFailed");
                exit();
            }

            $preveriRezultat;
            if($stmt->rowCount() > 0){
                $preveriRezultat = false;
            }else{
                $preveriRezultat = true;
            }
            return $preveriRezultat;
        }

    }

?>