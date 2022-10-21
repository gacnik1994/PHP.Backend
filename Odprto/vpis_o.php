<?php



if(isset($_POST["submit"])){

    //vzame podatke vpisa
    $uid = $_POST["uid"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwdr = $_POST["pwdr"];

    //uporaba razreda
    include "../Razredi/baza.php";
    include "../Razredi/vpis_r.php";
    include "../Razredi/nadzorvpisa.php";
    

    $vpis = new KontrolaVpisa($uid, $email, $pwd, $pwdr);

    $vpis->vpisUporabnika();

    header("location: ../index.php?napaka=none");

}




?>