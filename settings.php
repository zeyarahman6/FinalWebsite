
<?php
require_once("include/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
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
            <div class="panel ">
                <div class="panel-heading">   <h1>Change Password</h1>                 
                </div>
                   <div class="panel-body">
                       
                       <form action="settings_script.php" method="POST">
                           <div class="form-group">
                               <input type="text" name="oldpassword" class="form-control" placeholder="old password">
                           </div>
                           <div class="form-group">
                                <input type="text" name="newpassword" class="form-control" placeholder="new password">
                           </div>
                           <div class="form-group">
                                <input type="text" name="newpassword" class="form-control" placeholder="retype new password">
                           </div>
                           
                           <center><button type="button" class="btn btn-primary">Confirm</button></center>
                           
                           <?php
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                        ?>
                           
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
