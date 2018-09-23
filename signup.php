
<?php
require("include/common.php");
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>


<html>
   <head>
        <title>COMIC STORE</title>
        
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
        
            <div class="container" id="panel_decor">
            <div class="row">
            <div class="col-xs-6 col-xs-offset-3"> 
            <div class="panel panel-primary">
                <div class="panel-heading">   <h1>SIGN UP!</h1>                 
                </div>
                   <div class="panel-body">
                       
                       <form  action="signup_script.php" method="POST">
                           <div class="form-group">
                               <input type="name" name="name" class="form-control" placeholder="Name" required>
                           </div>
                           <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="e-mail" required>
                           </div>
                           <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="choose your password" required>
                           </div>
                           <div class="form-group">
                                <input type="text" name="contact" class="form-control" placeholder="contact" required>
                           </div>
                           <div class="form-group">
                                <input type="text" name="city" class="form-control" placeholder="city"required>
                           </div>
                              <div class="form-group">
                                <input type="text" name="address" class="form-control" placeholder="address" required>
                           </div>
                           <center><button type="submit" class="btn btn-primary">signup</button></center>
                       </form> 
                   </div>
                <center> <div class="panel-footer">
                    </div></center>
            </div>
            </div>
            </div>
        </div>
     
        <?php include 'include/footer.php'; 
        ?>

    
        
        
        
    </body>
    
</html>
