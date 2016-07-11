<?php require("header.php");?>


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
					
							<h2 class="title text-center">Post Advert</h2>
						<div class="signup-form"><!--sign up form-->
						<h2>Submit New Item</h2>





<form method="post" action="submit.php">

<input type="hidden" name="submit" value='1'>

<input type="hidden" name="category_id" value="<?=$_GET['category_id']?>">
<input type="hidden" name="username" value="<?=$_SESSION['login']?>">

<p><label>Title:</label> <input type="text" name="title"></p>

<p><label>Content:</label> <textarea name="content"></textarea></p>

<p><label>Contact details:</label> <textarea name="contact_details"></textarea></p>

<!--<p><label>Condition:</label> <input type="text" name="condition"></textarea></p>

<p><label>Size:</label> <input type="text" name="size"></textarea></p>

<p><label>Price:<input type="number" step="0.01" name="price"/></label></p>

<p><label>Image:<input type="file" name="pic" data-max-size="2048" accept="image/*">(Must be under 2MB)</label></p>-->

<p><input type="submit" value="Submit classified"></p>

</form>
</div>
</div>
</div>
</div>
</div>


<?php require("footer.php");?>