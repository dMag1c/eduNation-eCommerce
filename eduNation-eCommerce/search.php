<?php
	require ('./includes/config.inc.php');
	require (MYSQL);
	$page_title = "Search";
	include ('./includes/header.php');
	
	if (isset($_GET["for"])) {
		$searchFor = $_GET["for"];
		$terms = preg_replace("/\"(.*?)\"/e", "search_transform_term('\$$searchFor')", $searchFor);
		$terms = preg_split("/\s+|,/", $terms);

		$out = array();

		foreach($terms as $term){

			$term = preg_replace("/\{WHITESPACE-([0-9]+)\}/e", "chr(\$searchFor)", $term);
			$term = preg_replace("/\{COMMA\}/", ",", $term);

			$out[] = $term;
		}

		$searchFor = $term;
	}
	else {
		$results = 0;
	}
?>
			<div id="homeM"> 
				
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
					// Display products in specific category

					$result = mysqli_query ($dbc, "SELECT * FROM products WHERE name LIKE '%$searchFor%' ORDER by name;");
					$block=1;
					
					while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
					{
						$productPrice = $row['price'];
						$productLink = '<a href="product.php?product_id='.$row['id'].'">';
						$productName = $row['name'];
						$productBrand = $row['brand'];
						
						
						
						if($block % 2){
										echo '<div class="ui-block-a"><div class="itemM"><h1>' .$productLink.'</a>';
										echo $productName.'</h1>';
										echo '<h2>' .$productBrand.'</h2>';
										echo $productLink. '<img src="img/';
										echo imageSmall($row['image']).'" alt="'.$productName. '" height="100px" width="100px"/></a>';
									}
									else {
										echo '<div class="ui-block-b"><div class="itemM"><h1>' .$productLink.'</a>';
										echo $productName.'</h1>';
										echo '<h2>' .$productBrand.'</h2>';
										echo $productLink. '<img src="img/';
										echo imageSmall($row['image']).'" alt="'.$productName. '" height="100px" width="100px" /></a>';
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
							</div>
						
						<?php
					}

				?>
			</div>
<?php include ('./includes/footer.php'); ?>