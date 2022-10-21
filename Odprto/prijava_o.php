<?php



if(isset($_POST["submit"])){

    //vzame podatke vpisa
    $uid = $_POST["uid"];
    $pwd = $_POST["pwd"];

    //uporaba razreda
    include "../Razredi/baza.php";
    include "../Razredi/prijava_r.php";
    include "../Razredi/nadzorPrijave.php";
    

    $prijava = new KontrolaPrijave($uid,  $pwd);

    $prijava->prijavaUporabnika();

    header("location: ../index.php?napaka=none");

}




?>