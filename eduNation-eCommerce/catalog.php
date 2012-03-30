<?php
	require ('./includes/config.inc.php');
	require (MYSQL);
	$page_title = "Catalog";
	include ('./includes/header.php');
	
	if (isset($_GET["category"])) {
		$category = $_GET["category"];
		$result = mysqli_query ($dbc, "SELECT * FROM categories WHERE id=$category ORDER by name;");
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) $categoryName = $row['name'];

	}
	else {
		$category = null;
	}
?>
			<div id="homeM"> 
				
				<p class="center"><a href="home.php">Home</a> &gt; 
					<?php
						if ($category) {
							echo '<a href="catalog.php">Products</a>';
							echo ' &gt; <a class="current" href="catalog.php?category='.$category.'">'.$categoryName.'</a>';
						}
						else {
							echo '<a class="current" href="catalog.php">Products</a>';
						}
					?>
				</p>
					<!--<a href="#"><img class="search" src="img/search1.png" alt="search bar" /></a>-->
						<?php echo searchBar(); ?>
				
				
					<div id="sidenavM" class="ui-grid-a">
						<ul>
							<?php 

							$result = mysqli_query ($dbc, "SELECT * FROM categories ORDER by name;");
							$block=1;
							$categories_rows = array();
							while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{
								array_push($categories_rows, $row);
								$categoryLink = '<a href="catalog.php?category='.$row['id'].'">';
								if($block % 2){
									/*echo '<div class="ui-block-a"><li>'.$categoryLink.$row['name'].'</a></li></div>';*/
								}
								else {
									/*echo '<div class="ui-block-b"><li>'.$categoryLink.$row['name'].'</a></li></div>';*/
								}
								$block++;
							}
							?>
						</ul>
                        <!--<hr />-->
					
		
   

				<?php 
					// Display products in specific category
					if ($category) {
						$result = mysqli_query ($dbc, "SELECT * FROM products WHERE category_id=$category ORDER by name;");
						
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
										echo imageSmall($row['image']).'" alt="'.$productName. '" /></a>';
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
										echo "<br /><h3>Price: $productPrice</h3></div>";
									}
							?>
								
			
							<?php
						}
					}
					// Display category links
					else {
						//print "No category";
						
						$block=1;
								
						
						foreach ($categories_rows as $row) {
							$categoryLink = '<a href="catalog.php?category='.$row['id'].'">';
							$image = $row['image'];
							$name = $row['name'];
					 
							if($block % 2){
								 echo '<div class="ui-block-a"><h2>' .$categoryLink;
								 echo $name. '</a></h2>';
								 echo $categoryLink;
								 echo '<img src="img/' .$image.'"alt="'.$name.' " height="15%" width="45%" /></a></div>';
                        	}
							else {
								 echo '<div class="ui-block-b"><h2>' .$categoryLink;
								 echo $name. '</a></h2>';
								 echo $categoryLink;
								 echo '<img src="img/' .$image.'"alt="'.$name.'" height="15%" width="45%" /></a></div>';
                        	}
							$block++;
						
						
						}
					}
						?> 
                        
					
				
						
             </div>   
			</div>
<?php include ('./includes/footer.php'); ?>