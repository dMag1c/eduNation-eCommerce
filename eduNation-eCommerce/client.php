<?php
	require ('./includes/config.inc.php');
	require (MYSQL);
	$page_title="Client";
	include ('./includes/header.php');
	
	if (isset($_GET["product_id"])) {
		$productID = $_GET["product_id"];
	}
	else {
		$productID = null;
	}
?>
			<div id="homeM">
				
				<p class="center"><a href="home.php">Home</a> &gt; <a href="cart.php">Cart</a> &gt; <a class="current" href="client.php">Checkout</a></p>
					<!--<a href="#"><img class="search" src="img/search1.png" alt="search bar" /></a>-->
						<?php echo searchBar(); ?>
				
			
				
					<div id="checkM">
						<hr /><h1>Please enter your information:</h1>
						<h2><em class="it">Shipping:</em></h2>
					
                    <div class="ui-grid-b">
	
	

                    <form action="">
						<fieldset>
							<input type="text" name="fullname" placeholder="Full Name" /><br />
							<input type="text" name="address1" placeholder="Address 1"/>
							<input type="text" name="address2" placeholder="Address 2" /><br />
							<div class="ui-block-a"><input type="text" name="city" placeholder="City" /></div>
							<div class="ui-block-b"><input type="text" name="state" placeholder="State" /><br /></div>
							<div class="ui-block-c"><input type="text" name="zip" placeholder="Zip" /> </div>
							<input type="text" name="country" placeholder="Country" /> <br/>
							<input type="text" name="phone" placeholder="Phone" />
						</fieldset>
					<br /><h2><em class="it">Payment Method:</em></h2>
						<fieldset>
							<input type="text" name="cardname" placeholder="Name on Card" /> <br />
							<input type="text" name="cardnumber" placeholder="Card Number" /> <br />
							<div class="ui-block-a"><input type="text" name="cardcvc" placeholder="CVC" /></div>
							<div class="ui-block-b"><input type="text" name="expdate" placeholder="Exp. Date" /></div> 
							<div class="ui-block-c"><input type="text" name="cardtype" placeholder="Card Type" /><br /> </div>
						</fieldset>
					</form>
                    
                     </div>
					<p>Or use <a href="http://www.paypay.com"><img src="img/paypal.png" alt="paypal" /></a></p>
					</div><hr />
					
				
				
				
					<div id="contactM">
						<br /><h2>In Store Pick-up?</h2>
						<ul>
							<li>4000 Central Florida Blvd</li>
							<li>Orlando, FL 32816</li>
							<li>1-555-EDU-CATE</li>
							<li>&nbsp;</li>
							<li><h5>Questions/Comments?</h5></li>
							<li><a class="shopnow" href="contact.php">Contact us</a> via email or give us a call between <em class="it">9am-6pm M-F</em>.</li>
						</ul>
					</div>
				
				
			</div>
<?php include ('./includes/footer.php'); ?>