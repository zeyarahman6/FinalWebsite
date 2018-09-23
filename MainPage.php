<?php
include("inlcude/common.php");

if(isset($_SESSION['email']))
{    header('location:products.php');}
?>
<html>
    <head>
        <title>COMICS STORE</title>
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css" >
        
    </head>
    <body>
        <?php
        include 'include/header.php';
        ?>
        <div  id="banner_image">
           <center> <div class="container ">
                <div id="banner_content">
                    <a href="products.php" class="btn btn-danger btn-lg active ">Shop Now</a>
                </div>
            </div>
           </center>
        </div>
                    </div>
                    
                    
                    
        <?php include 'include/footer.php'; 
        ?>
        
        </body>
</html>
