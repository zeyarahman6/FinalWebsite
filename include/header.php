<div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container"> 
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="MainPage.php" class="navbar-brand">COMICS STORE</a> 
                </div>
                
                    <div class="collapse navbar-collapse" id="mynav">
                 
                        <ul class="nav navbar-nav navbar-right"> 
                            
                           <?php 
                           if(isset($_SESSION['email']))
                           { ?>
                            <li> <a href="cart.php" ><span class="glyphicon glyphicon-shopping-cart"></span>cart</a> </li>

                        <li> <a href="setting.php" ><span class="glyphicon glyphicon-user"></span>setting</a> </li>
                        <li><a href="logout_script.php" ><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li
                        ?>
                           <?php }
                        else { ?>
                            
                            
                            <li> <a href="signup.php" target="_blank"><span class="glyphicon glyphicon-user"></span>Sign Up</a> </li>
                        <li><a href="login.php" target="blank"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
                        
                        <?php }?>

                        </ul>
                    </div>
            </div>
</div>