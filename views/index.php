<?php 
include_once("PDO_config.php");
?>
<?php require("header.php");?>
<?php if( !(isset( $_POST['login'] ) ) ) { ?>


 <div class="row">




	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>2ndChance</span>Clothing.com</h1>
									<h2>Where old clothes find a new life</h2>
									<p>A primere shop for secondhand clothes </p>
									
								</div>
								<div class="col-sm-6">
									<img src="images/home/shoes.png" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>2ndChance</span>Clothing.com</h1>
									<h2>100% Refurbished Clothing</h2>
									<p>Repaired where appropreate </p>
								</div>
								<div class="col-sm-6">
									<img src="images/home/hat.png" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>2ndChance</span>Clothing.com</h1>
									<h2>Free Shipping world wide!</h2>
									<p>*Still not a real site</p>
									
								</div>
								<div class="col-sm-6">
									<img src="images/home/shoes.png" class="girl img-responsive" alt="" />
									
								</div>
							</div>
							
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
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
							<h2 class="title text-center">Home Page</h2>
						
							
																		
							
												   
							</div>





							<?php foreach($cats as $cat):/* This isnt working I may just swap it for the select function in the Category, the same way that category pages work themmselvescd*/?>
							
							<div style="float:left;">







								<p>There are currently: <?=$cat['classifieds']?> Active Ads </p>
							</div>
						<?php endforeach;?>
						<br><br>
						<p>	This is a site I made during my Degree.<br> 
							It was originally much worse looking and about a different subject, so I have redone some aspects. This was made to be a prototype for a Classified Ads website.<br>
							Log ins and registering only works on this (home) page. Other pages <br>
							I have partially added some other features to improve it, which will be added later, such as:<br>
						
						</p>
						<ul>
						<li>- Expanding the "Submit new Ad" feature to compensate for recently added item data (Images, conditions, sizes)<br></li>
						<li>- Making Log ins possible on all pages<br></li>
						<li>- Setting the Image size in the banner it doesn't resize when the hat picture comes on<br></li>
						<li>- Fixing small bugs generated from the redesign, such as the automatic redirects no longer working<br></li>
						</ul>
						<br>
						<p>
						
							<b>This site was to show my use of Object Orientated PHP, MySQL and to make use of the Model View Controller</b>
						
						</p>
					</div><!--features_items-->
					
					
					
					
					
				</div>
			</div>
		
	</section>


 
<?php 
} else {
$usr = new Users; //create a new instance of the Users class
$usr->storeFormValues( $_POST ); //like I said before we will use the function storeFormValues to store the form values

if( $usr->userLogin() ) {
echo "Welcome User: "; 
echo $_SESSION["login"];
unset ($_POST['login']);
echo '<a href="../index.php"> Back </a>';
header('Refresh: 1; URL=../index.php');
} else {
echo "Incorrect Username/Password";
session_start();
session_destroy();
header('Refresh: 1; URL=../index.php');
}
}
?>
<?php require("footer.php");?>
