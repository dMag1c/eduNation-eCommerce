<?php
	require ('./includes/config.inc.php');
	require (MYSQL);
	$page_title="Edit Catalog";
	include ('./includes/header.php');
	
?>
			<div id="homeM">
				
				<p class="center"><a href="home.php">Home</a> &gt; <a class="current" href="admin.php">Admin</a></p>
					<!--<a href="#"><img class="search" src="img/search1.png" alt="search bar" /></a>-->
						<?php echo searchBar(); ?>
				
			
				
					<div id="checkM">
						<hr /><h1>Enter a New Item:</h1>
					<form action="">
						<fieldset>
							<input type="text" name="productID" placeholder="Product ID" />
							<input type="text" name="productName" placeholder="Product Name" /> 
							<input type="text" name="brandName" placeholder="Brand Name"/> 
							<input type="text" name="description" placeholder="Description" /> 
							<input type="text" name="feat1" placeholder="Feature 1" /> 
							<input type="text" name="feat2" placeholder="Feature 2" /> 
							<input type="text" name="feat3" placeholder="Feature 3" /> 
							<input type="text" name="category" placeholder="Category" /> 
							<input type="text" name="sku" placeholder="SKU" /> 
							<input type="text" name="stock" placeholder="Stock" /> 
							<input type="text" name="cost" placeholder="Cost" /> 
							<input type="text" name="price" placeholder="Price" /> 
							<input type="text" name="salePrice" placeholder="Sale Price" /> 
							<input type="text" name="productImage" placeholder="Product Image" /> 
						</fieldset>
					</form>
					<h1>Or check an item's stock: </h1> 
					<input type="text" name="productImage" placeholder="(enter Product ID)" />
					</div>
					
				
				
					<hr />
				

				
			</div>
<?php include ('./includes/footer.php'); ?>