<?php

     class Prijava extends Baza{

        protected function getUser($uid, $pwd){
            $stmt = $this->connect()->prepare('SELECT users_pwd FROM uporabnik WHERE users_uid = ? OR users_email = ?; ');

            if(!$stmt->execute(array($uid,$pwd))){
                $stmt = null;
                header("location: ../index.php?napaka=stavekFailed");
                exit();
            }
            if($stmt->rowCount() == 0){

                $stmt = null;
                header("location: ../index.php?error=usrnameNotFound");
                exit();
            }

            $kodiranoGeslo = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $checkPwd = password_verify($pwd, $kodiranoGeslo[0]["users_pwd"]);

            if($checkPwd==false){
                $stmt = null;
                header("location: ../index.php?error=wrongPassword");
                exit();
            }else if($checkPwd==true){
                $stmt = $this->connect()->prepare('SELECT * FROM uporabnik WHERE users_uid = ? OR users_email = ? AND users_pwd = ?; ');

                if(!$stmt->execute(array($uid,$uid,$pwd))){
                    $stmt = null;
                    header("location: ../index.php?napaka=stavekFailed");
                    exit();
                }
                $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
                session_start();
                $_SESSION["userId"] = $user[0]["user_id"];
                $_SESSION["userUid"] = $user[0]["users_uid"];
            }

           $stmt = null;
        }
     }
        

?>