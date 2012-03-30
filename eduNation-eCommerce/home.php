<?php
	require ('./includes/config.inc.php');
	require (MYSQL);
	$page_title = "Home";
	include ('./includes/header.php');
	
?>
			<div id="homeM"> 
				
					<!--<a href="#"><img class="search" src="img/Search1.png" alt="search bar" /></a>-->
						
                        <?php echo searchBar(); ?>
				
				
					<?php 
						
						$result = mysqli_query ($dbc, "SELECT * FROM products WHERE is_featured=1 ORDER BY RAND() LIMIT 1");
						while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
   						{
					?>
					<div id="feat">
						<h5 class="center">Featured Product</h5>
						<a href="catalog.php"><img class="display" src="<?php echo 'img/' . $row["image"] ?>" alt="Blockers" /></a>
						<!--height="25%" width="35%"-->
                        <div data-role="collapsible" data-iconpos="bottom" id="listM">
  							 
   							
						<h1><?php echo $row["name"] ?></h1>
						<h2><?php echo $row["brand"] ?></h2>
						<ul>
							<li><u>Develops:</u></li>
							<li>- <?php echo $row["feat1"] ?></li>
							<li>- <?php echo $row["feat2"] ?></li>
							<li>- <?php echo $row["feat3"] ?></li>
						</ul>
                        
                        </div>
						<h4>Price: $<?php echo $row["price"] ?></h4>
                        <hr />
						<!-- Removed sale price until code is working -->
						<!-- <h3><a class="shopnow" href="catalog.php">SALE: $<?php //echo $row["salePrice"] ?></a></h3>	-->
					</div>
					<?php } ?>
				
				<!--<div class="grid_3">
					<div class="adv2">
					<img src="img/item5a.png" alt="Children's Books" />
						<h3>15%-20% off</h3>
						<h4>Books/DVDs <br />K - 5th</h4>
						<a class="shopnow" href="books.php">Shop Now &gt;</a>	
					</div>
					<div class="adv2">
					<img src="img/chalk.png" alt="Children's Books" />
						<h3>New Items</h3>
						<h4>Arts/Crafts <br />Supplies</h4>
						<a class="shopnow" href="arts.php">Shop Now &gt;</a>	
					</div>	
				</div>
				
					<div id="shipM">
						<h1><em>Teachers,</em> you may qualify for <em class="under">Free Shipping</em>!</h1>
						<p><a class="shopnow" href="#">Learn More &gt;</a></p>
					</div>
				
				<div class="grid_8">
					<div id="descrip">
						<h1>The Elementary Ed. Supply Headquarters</h1>
						<p><em class="it">EduNation</em> is the place to be if you are looking for the lowest prices on elementary classroom and educational supplies.  Whether you have a little scholar of your own or teach a whole gaggle of them, <em class="it">EduNation</em> has the student and classroom supplies you need to keep their minds active and engaged.  From textbooks to art supplies, we are here to make sure you and your students are on the pinnacle of the current trends in elementary education and classroom experiences.</p>
					</div>
				</div>-->
				
					
                    <div id="contactM">
                    	<div class="ui-grid-a">
	

						
						<ul>
                            <li><h5>Our Policies:</h5></li>
							<div class="ui-block-a"><li><a class="shopnow" href="privacy.php">Privacy/Security</a></li></div>
							<div class="ui-block-b"><li><a class="shopnow" href="tax.php">Tax Policy</a></li></div>
							<div class="ui-block-a"><li><a class="shopnow" href="shipping.php">Shipping Policy</a></li></div>
							<div class="ui-block-b"><li><a class="shopnow" href="return.php">Return Policy</a></li></div>
							<li><h2>1-555-EDU-CATE</h2></li>
						</ul>
					</div>
				</div>
                    	
			</div>
<?php include ('./includes/footer.php'); ?>