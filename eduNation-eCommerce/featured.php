<?php
	require ('./includes/config.inc.php');
	require (MYSQL);
	$page_title="Featured";
	include ('./includes/header.php');
	
?>
			<div id="homeM2"> 
				
				<p class="center"><a href="home.php">Home</a> &gt; <a class="current" href="featured.php">Featured Items</a></p>
					<!--<a href="#"><img class="search" src="img/search1.png" alt="search bar" /></a>-->
						<?php echo searchBar(); ?>
				
				
					<div id="sidenavM" class="ui-grid-a">
						<ul>
							<?php 

							$result = mysqli_query ($dbc, "SELECT * FROM categories ORDER by name;");
							
							$categories_rows = array();
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
								array_push($categories_rows, $row);
								$categoryLink = '<a href="catalog.php?category='.$row['id'].'">';
								//echo '<li>'.$categoryLink.$row['name'].'</a></li>';
							}
							?>
						</ul>
					
				
				<?php
				$result = mysqli_query ($dbc, "SELECT * FROM products WHERE is_featured=1 ORDER by name;");
				$block=1;
				
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
				{
					$productPrice = $row['price'];
					$productLink = '<a href="product.php?product_id='.$row['id'].'">';
					$productName = $row['name'];
					$productBrand = $row['brand'];
					
					?>
					
						
							
							
						<?php
						
                           	 if($block % 2){
										echo '<div class="ui-block-a"><h1>' .$productLink.'</a>';
										echo $productName.'</h1>';
										echo '<h2>' .$productBrand.'</h2>';
										echo $productLink. '<img src="img/';
										echo imageSmall($row['image']).'" alt="'.$productName. '" height="15%" width="45%" /></a>';
							 }
							else {
										echo '<div class="ui-block-b"><h1>' .$productLink.'</a>';
										echo $productName.'</h1>';
										echo '<h2>' .$productBrand.'</h2>';
										echo $productLink. '<img src="img/';
										echo imageSmall($row['image']).'" alt="'.$productName. '" height="15%" width="45%" /></a>';
							}
							$block++;
							?>
							
					<?php
							$salePrice = productIsOnSale($dbc, $row['id']);
							// On sale display sale price
							if ($salePrice) {
								echo "<h4 class=\"sale\">Price: $productPrice</h4>";
								echo "<h3 class=\"sale\">SALE: $salePrice</h3></div>";
							}
							else {
								echo "<br /><br /><br /><h3>Price: $productPrice</h3></div>";
							}
					?>
						
					
					<?php
				}
				?>
				<!-- <div class="grid_3">
					<div class="item">
						<h1><a href="art1.php">Jumbo Chalk</a></h1>
						<h2>Melissa &amp; Doug</h2>
						<a href="art1.php"><img src="img/item2a.png" alt="jumbo chalk" /></a>
						<h4>Price: $2.55</h4>
						<h3>SALE: $2.00</h3>
					</div>
				</div> -->
				</div>
			</div>
<?php include ('./includes/footer.php'); ?>