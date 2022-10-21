<?php

?>
<!DOCTYPE html>
<html>
   <?php include("header.php");
      
   $sql ="SELECT * FROM artikli ";
   $result = mysqli_query($conn,$sql);
   $test = mysqli_fetch_all($result, MYSQLI_ASSOC);
   mysqli_free_result($result);
   mysqli_close($conn);
   ?>
   <div class="container">
      <div class="row">
         <?php foreach($test as $test): ?>

            <div class="col s6 md3 ">
               <div class="card z-depth-0 ">
                  <div class="card-content left obroba">
                     <h6><?php echo htmlspecialchars($test['Naziv']); ?></h6> 
                     <div class="card-action right-align">
                        <img class="responsive-img" src=<?php echo $test['slika']?>>
                     </div>
                     <div class="left">
                        <p class="cena">Cena: <?php echo $test['Cena']?> EUR </p>
                        
                     </div>
                     <?php
                        if($test["Kolicina"] > 0){
                     ?>
                     <button class="btn right">V KOSARICO</button>
                     <?php
                        }else{
                     ?>
                     <button class="btn right">NI ZALOGE</button>
                      <?php
                        }
                     ?>
                  </div>      
               </div>         
            </div>

            <?php endforeach; ?>
      </div>

   </div>

   <?php include("footer.php");?>


</html>