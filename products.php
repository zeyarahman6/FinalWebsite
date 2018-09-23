<?php
require("include/common.php");
?>
html>
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
        include 'include/check-if-added.php';
        ?>
    
        <div class="container front">
            <div class="jumbotron">
              <center> <h1> Welcome to our Comics Store!</h1>
                <p> We have the best marvel , dc and raj comics. No need to hunch around. We all have  in one place.</p>
                </center>
            </div>
        </div>
        
        
        <div class="container">
        <div class="row text-center">
            <div class="col-md-4 "> 
                <div class="thumbnail">
                <img src="img/m.jpg" alt="=responsive image">
                <div class="caption">
                    <h3>MARVEL- AVENGERS</h3>
                    <p>Price: Rs 499.00</p>
                    
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    
                    
                </div>
                
            </div>
            </div>
            
            
         
            
            
            <div class="col-md-4 "> 
                 <div class="thumbnail">
                <img src="img/z.png" alt="=responsive image">
                <div class="caption">
                    <h3>Marve- Avengers 2</h3>
                    <p>Price: Rs 399.00</p>
                    
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    
                </div>
                
            </div>
            </div>
            
            <div class="col-md-4 "> 
                 <div class="thumbnail">
                <img src="img/m.jpg" alt="=responsive image">
                <div class="caption">
                    <h3>Marvel- Age of Ultron</h3>
                    <p>Price: Rs 799.00</p>
                      <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    
                </div>
                
            </div>
            </div>
        </div>
        </div>
        
        
        <div class="container">
        <div class="row text-center">
            <div class="col-md-4 "> 
                <div class="thumbnail">
                <img src="img/11.png" alt="=responsive image">
                <div class="caption">
                    <h3>DC-Super Powers</h3>
                    <p>Price: Rs 499.00</p>
                    
                <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>    
                    
                </div>
               
            </div>
            </div>
            
            
         
            
            
            <div class="col-md-4 "> 
                 <div class="thumbnail">
                <img src="img/bat.png" alt="=responsive image">
                <div class="caption">
                    <h3>Batman</h3>
                    <p>Price: Rs 399.00</p>
                    
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    
                </div>
                
            </div>
            </div>
            
            <div class="col-md-4 "> 
                 <div class="thumbnail">
                <img src="img/dc.jpg" alt="=responsive image">
                <div class="caption">
                    <h3>DC- SUper Powers</h3>
                    <p>Price: Rs 799.00</p>
                    
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    
                    
                </div>
                
            </div>
            </div>
        </div>
        </div>
        
        
         <div class="container">
        <div class="row text-center">
            <div class="col-md-4 "> 
                <div class="thumbnail">
                <img src="img/rc.png" alt="=responsive image">
                <div class="caption">
                    <h3>Raj- Nagraj vs others</h3>
                    <p>Price: Rs 499.00</p>
                    
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    
                </div>
                
            </div>
            </div>
            
            
         
            
            
            <div class="col-md-4 "> 
                 <div class="thumbnail">
                <img src="img/2.jpg" alt="=responsive image">
                <div class="caption">
                    <h3>RAj- Kobi</h3>
                    <p>Price: Rs 399.00</p>
                    
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                </div>
                
            </div>
            </div>
            
            <div class="col-md-4 "> 
                 <div class="thumbnail">
                <img src="img/rc.png" alt="=responsive image">
                <div class="caption">
                    <h3>Raj- Nagraj and Dhruv.</h3>
                    <p>Price: Rs 799.00</p>
                    
                    <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                    
                </div>
                
            </div>
            </div>
        </div>
        </div>
           
         <?php include 'include/footer.php'; 
        ?>
    </body>
    
</html>
