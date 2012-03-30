<?php
	require ('./includes/config.inc.php');
	require (MYSQL);
	$page_title="Contact Us";
	include ('./includes/header.php');
	
?>
			<div id="homeM">
				
				<p class="center"><a href="home.php">Home</a> &gt; <a class="current" href="contact.php">Contact Us</a></p>
					<!--<a href="#"><img class="search" src="img/search1.png" alt="search bar" /></a>-->
						<?php echo searchBar(); ?>
				
			
				
					<div id="contactusM">
						<hr />
                        <h1>We'd Like to Hear From You!</h1>
					<form action="">
						
                        <fieldset>
							 <input type="text" name="firstname" placeholder="Name"/><br /> 
							<input type="text" name="lastname" placeholder="Email"/><br />
						</fieldset>
						<fieldset>
							<input type="text" name="subject" placeholder="Subject"/><br />
                            <div data-role="fieldcontain">
                                
                                    <textarea name="textarea" id="textareaM">
                                    </textarea>
							</div>
							
						</fieldset>
					</form> 
					</div>
				
				
				
					<div id="contactM">
                    	<div class="ui-grid-a">
	

						<h2>In Store Pick-up?</h2>
						<ul>
							<li>4000 Central Florida Blvd</li>
							<li>Orlando, FL 32816</li>
							<li>1-555-EDU-CATE</li>
							<li>&nbsp;</li>
                            <li><h5>Our Policies:</h5></li>
							<div class="ui-block-a"><li><a class="shopnow" href="privacy.php">Privacy/Security</a></li></div>
							<div class="ui-block-b"><li><a class="shopnow" href="tax.php">Tax Policy</a></li></div>
							<div class="ui-block-a"><li><a class="shopnow" href="shipping.php">Shipping Policy</a></li></div>
							<div class="ui-block-b"><li><a class="shopnow" href="return.php">Return Policy</a></li></div>
							<li></li>
							<li><a class="shopnow" href="contact.php">Contact us</a> via email or give us a call between <em class="it">9am-6pm M-F</em>.</li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
<?php include ('./includes/footer.php'); ?>