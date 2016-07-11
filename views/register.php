<?php 
    include_once("PDO_config.php");
?>

<?php if( !(isset( $_POST['register'] ) ) ) { ?>
<?php require("header.php");?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
     
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="category.php?id=1">Sportwear</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="category.php?id=2">Mens</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="category.php?id=3">Womens</a></h4>
								</div>
							</div>
							
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="category.php?id=4">Kids</a></h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="category.php?id=5">Accessories</a></h4>
								</div>
							</div>
							
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="category.php?id=6">Shoes</a></h4>
								</div>
							</div>
						</div><!--/category-products-->
					
						
						
						
					
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
					
							<h2 class="title text-center">Register</h2>
						<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
							
																		
							<p><b>All or Muffin</b>, the one stop shop for local baking good services
							</p>
												   
							



							<form method="post">
                   
                           <h4 style="color: #ffb347; text-align: center;"><b> <label for="usn">Username : </label></b>
                            <input type="text" id="usn" maxlength="30" required autofocus name="username" /></h4> <br>
                        

                        
                            <h4 style="color: #ffb347; text-align: center;"><b> <label for="ema">Email : </label></b>
                            <input type="email" id="ema" maxlength="30" required autofocus name="email" /></h4> <br>
                        
                    
                        
                            <h4 style="color: #ffb347; text-align: center;"><b><label for="fname">Firstname : </label></b>
                            <input type="text" id="fname" maxlength="30" required autofocus name="firstname" /></h4> <br>
                      

                      
                            <h4 style="color: #ffb347; text-align: center;"><b><label for="lname">Surname : </label></b>
                            <input type="text" id="lname" maxlength="30" required autofocus name="lastname" /></h4> <br>
                      


                       
                            <h4 style="color: #ffb347; text-align: center;"><b><label for="passwd">Password : </label></b>
                            <input type="password" id="passwd" maxlength="30" required name="password" /></h4> <br>
                      
                        
                      
                            <h4 style="color: #ffb347; text-align: center;"><b><label for="conpasswd">Confirm Password : </label></b>
                            <input type="password" id="conpasswd" maxlength="30" required name="conpassword" /></h4> <br> <br>
                     
                        
                            <input type="submit" name="register" value="Register" class="btn btn-default btn-block btn-warning"/> <br>
                            <input type="button" name="cancel" value="Cancel" onclick="location.href='../index.php'" class="btn btn-default btn-block btn-warning" />
                        
                    
                   
                </form>
			</div>
			</div>
						
						
					</div><!--features_items-->
					
					
					
					
					
				</div>
			</div>
		
	</section>
	
	
    
        
       
                

  

<?php require("footer.php");?>
<?php 
} else {
    $usr = new Users;
    $usr->storeFormValues( $_POST );
    
    if( $_POST['password'] == $_POST['conpassword'] ) {
        echo $usr->register($_POST);  

    } else {
        echo "Password and Confirm password not match"; 
    }
}
?>


