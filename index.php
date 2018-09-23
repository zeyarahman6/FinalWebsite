<?php 
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
             
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>        
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
        
        
        
        
    </head>
    <body>
        <?php
      $con= mysqli_connect("localhost","root", "", "store") or die(mysqli_error($con));
       
        
        
        ?>
        
                
            <div class="container" id="panel_decor">
            <div class="row">
            <div class="col-xs-6 col-xs-offset-3"> 
            <div class="panel panel-primary">
                <div class="panel-heading">   <h1>SIGN UP!</h1>                 
                </div>
                   <div class="panel-body">
                       
                       <form class="get" action="register_script.php">
                           <div class="form-group">
                               <input type="name" name="name" class="form-control" placeholder="Name" >
                           </div>
                           <div class="form-group">
                                <input type="email" name="email" class="form-control" placeholder="e-mail" >
                           </div>
                           <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="choose your password" >
                           </div>
                           <div class="form-group">
                                <input type="text" name="contact" class="form-control" placeholder="contact" >
                           </div>
                           <div class="form-group">
                                <input type="text" name="city" class="form-control" placeholder="city">
                           </div>
                              <div class="form-group">
                                <input type="text" name="address" class="form-control" placeholder="address" >
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

        
        
        
    </body>
</html>
