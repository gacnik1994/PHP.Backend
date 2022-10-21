<?php

class Baza{

    protected function connect(){
        try {
            $uporabnik = "gacnik";
            $password = "geslo";
            $dbh = new PDO('mysql:host=localhost;dbname=sp2',$uporabnik, $password);
            return $dbh;
        } catch (PDOException $e) {
            print "Napaka!: ". $e->getMessage(). "<be/>";
        }

    }

}

?>