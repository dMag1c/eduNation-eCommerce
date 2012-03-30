<?php
	require ('./includes/config.inc.php');
	require (MYSQL);
	$page_title="Cart";
	include ('./includes/header.php');
	
	if (isset($_GET["product_id"])) {
		$productID = $_GET["product_id"];
	}
	else {
		$productID = null;
	}
	//include ('cart.html');
?>


			<div id="homeM">
				
				<p class="center"><a href="home.php">Home</a> &gt; <a class="current" href="cart.php">Cart</a></p>
					<!--<a href="#"><img class="search" src="img/search1.png" alt="search bar" /></a>-->
						<?php echo searchBar(); ?>
				
				<div id="cartM" >
					
						<div class="itemM">
						<a href="#"><img src="img/remove1.png" alt="remove" /></a>
							<h1><a href="art1.php">Jumbo Chalk <em class="qty">x2</em></a></h1>
							<h2>Melissa &amp; Doug</h2>
							<a href="art1.php"><img src="img/item2a.png" alt="jumbo chalk" height="10%" width="40%"  /></a>
							<h4>Price: $2.55</h4>
							<h3>SALE: $2.00</h3>
						</div>
					
					
						<div class="itemM">
						<a href="#"><img src="img/remove1.png" alt="remove" /></a>
							<h1><a href="teach1.php">Shelf Organizer</a></h1>
							<h2>Pacon Corporation</h2>
							<a href="teach1.php"><img class="brain" src="img/item10b.png" alt="Shelf Organizer" height="10%" width="40%" /></a>
							<h4>Price: $30.15</h4>
							<h3>SALE: $25.50</h3>
						</div>
					
					
						<div class="itemM">
						<a href="#"><img src="img/remove1.png" alt="remove" /></a>
							<h1><a href="games2.php">Blockers! <em class="qty">x35</em></a></h1>
							<h2>Briarpatch Inc.</h2>
							<a href="games2.php"><img class="brain1" src="img/item1a.png" alt="Blockers!" height="10%" width="40%" /></a>
							<h4>Price: $31.35</h4>
							<h3>SALE: $25.50</h3>
						</div>
					<a href="client.php" data-role="button">Checkout</a>
				</div>
					
						<div id="contactM">
                    	<div class="ui-grid-a">
	

						
						<ul>
							<li><h5>Our Policies:</h5></li>
							<div class="ui-block-a"><li><a class="shopnow" href="privacy.php">Privacy/Security</a></li></div>
							<div class="ui-block-b"><li><a class="shopnow" href="tax.php">Tax Policy</a></li></div>
							<div class="ui-block-a"><li><a class="shopnow" href="shipping.php">Shipping Policy</a></li></div>
							<div class="ui-block-b"><li><a class="shopnow" href="return.php">Return Policy</a></li></div>
							<li></li>
                            <li><h2>In Store Pick-up?</h2></li>
                            <li>4000 Central Florida Blvd</li>
							<li>Orlando, FL 32816</li>
							<li>1-555-EDU-CATE</li>
							<li>&nbsp;</li>
                            
							<li><a class="shopnow" href="contact.php">Contact us</a> via email or give us a call between <em class="it">9am-6pm M-F</em>.</li>
						</ul>
					</div>
				</div>
					</div>
				
					
				</div>
			</div>
<?php include ('./includes/footer.php'); ?>