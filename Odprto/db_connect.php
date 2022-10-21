<?php
    //povezava na bazo
$conn =mysqli_connect('localhost','gacnik','geslo','sp2');
//preveri povezavo
if(!$conn){
   echo 'napaka pri povezavi: ' . mysqli_connect_error();
}
?>