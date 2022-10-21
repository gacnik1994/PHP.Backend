<?php
    session_start();
    include "Odprto/db_connect.php";
?>
<head>
    <title>3D Prints</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>
        .brand-text{
            font-weight: bold;
            font-size:150%;
            color: orange !important;
        }
        p{
            color:orange;
        }
        .signup{
            max-width:400px;
            border-style:solid;
            border-color:grey !important;
            padding: 20px;
            margin-bottom:20px;
            margin-top:20px;
            
        }
        

        
        .obroba{
            border-style:solid;
            border-color:grey !important;
        }
        .login{
            z-index: 2;
            position:absolute;
            padding:0px;
            border-style:solid;
            border-color:grey !important;
            background-color:white;
            max-width: 250px;
            max-height: 350px;
           
        }
        
        .desno{
            min-width:200px;
            max-height:64px;
            
        }
        .cena{
            color:black;
            font-size:20px;
        }
        .top{
            margin-top:16px;
        }
       
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
    
            $(document).ready(function(){
                $(".myMenu ul li ").hover(function(){
                    $(this).children("ul").stop(true,false,true).slideToggle("medium");
                });	
            });

    </script> 
  
    
</head>
<body>
    <nav class="black">
        <div class="container">
            <a href="index.php" class="brand-text brand-logo left">3D PRINTS</a>
            <a href="#" class="btn right top">KOSARICA</a>
            <div   class="right desno ">
                <?php
                    if(isset($_SESSION["userId"])){
                 ?>       
                 <a href="#" class="btn"><?php echo $_SESSION["userUid"];?></a>
                 
                 <?php
                    }else{
                ?>
                 
                 <div class=" myMenu">
                     <ul>
                        <li><p class="btn"> LOGIN</p>
                        <ul class="collapsible-body">
                            <li>
                             
                            <form action="Odprto/prijava_o.php" class="login" method="POST">
                                <div class="container">
                                <label > Uporabniško ime </label>
                                <input type="text" name="uid">
                                
                                <label > Geslo </label>
                                <input type="password" name="pwd">
                                
                                <input class="btn" type="submit" name="submit" value="PRIJAVA">
                                </div>
                                
                            </form>
                            </li>
                        </ul>
                        </li>
                    </ul> 
                 </div>
                    <?php
                    }
                    if(isset($_SESSION["userId"])){
                ?>
                    <a href="Odprto/izpis.php" class="btn">SIGN OUT</a>
                    <?php
                    }else{
                ?>
                 
                    <li><a href="signup.php" class="btn">SIGN UP</a></li>
                    <?php
                    }
                    ?>   
                    
                
                  
                </div>
        </div>
        
    </NAV>
        

