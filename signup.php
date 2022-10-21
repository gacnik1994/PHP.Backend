<?php


?>
<html>
    <?php include("header.php");?>
    <div class="container signup">
        <form action="Odprto/vpis_o.php" method="POST">
            <label for="uid">Uporabniško ime</label>
            <input type="text" name="uid" class="obroba">
            <label for="email">Elektronska pošta</label>
            <input type="text" name="email" class="obroba">
            <label for="pwd">Vnesite geslo</label>
            <input type="password" name="pwd" class="obroba">
            <label for="pwdr">Ponovno vnesite geslo</label>
            <input type="password" name="pwdr" class="obroba">
            <button class="btn" type="submit" name="submit">SIGN UP</button>
        </form>
     </div>
    <?php include("footer.php");?>
</html>