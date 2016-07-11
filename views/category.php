<?php require("header.php");?>
<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
			<?php if(isset($_SESSION['login'])) {echo '<p><a href="submit.php?category_id=' . $category['id'] .'" class="btn btn-warning">Submit classified</a></p>';} else{
	 echo 'Log in to claim or make an ad';} ?>
		</div>
		
</section>

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
					
						<h2 class="title text-center"><?=$category['name']?></h2>

	

	



<?php foreach($classifieds as $classified):?>
	<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="data:image/jepg;base64,<?=base64_encode($classified['img'])?>" alt="<?=$classified['title']?>" />
										<h2>&pound;<?=nl2br($classified['price']);?></h2>
										<p><?=$classified['title']?></p>
										<?php if(isset($_SESSION['login'])) {echo '<p><input type="submit" class="btn btn-default"  value="buy this item"></p>';} else{
											echo '<p><input type="submit" class="btn btn-default disabled" value="Log in to buy"></p>';} ?>

										</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>&pound;<?=nl2br($classified['price']);?></h2>
											<p><?=$classified['title']?></p>
											<p>Offered By: <?=nl2br($classified['User_sub']);?></p>
											<p>Size: <?=nl2br($classified['Size']);?></p>
											<p>Condition: <?=nl2br($classified['condition']);?></p>
											<p>Published at: <?=$classified['date']?></p>
											<form method="post" action="claimAD.php">
											<input type="hidden" name="submit" value='1'>

											<input type="hidden" name="ad_id" value=" <?=$classified['id']?>">
											<input type="hidden" name="username" value="<?=$_SESSION['login']?>">
											<?php if(isset($_SESSION['login'])) {echo '<p><input type="submit" class="btn btn-default"  value="buy this item"></p>';} else{
											echo '<p><input type="submit" class="btn btn-default disabled" value="Log in to buy"></p>';} ?>
											</form>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					 
<?php endforeach;?>

</div><!--features_items-->
				</div>
		
		
	</section>

<?php require("footer.php");?>