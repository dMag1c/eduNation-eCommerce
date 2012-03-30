<?php 
	require ('snippets.inc.php');	// Needed for common functions
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
		<!-- Print either regular title or the page title -->
		<title>
		<?php if (isset($page_title)) {
			echo $page_title;
		} else {
			echo 'eduNation - Group 6';
		}
		?>
		</title>
		<link rel="stylesheet" href="css/reset.css" />
		<link rel="stylesheet" href="css/text.css" />
		<!--<link rel="stylesheet" href="css/960.css" />-->
   		<link rel="stylesheet" href="css/styles.css" />
		<link type="text/css" href="css/ui-lightness/jquery-ui-1.8.18.custom.css" rel="stylesheet" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.css" />	
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.18.custom.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.1.0-rc.1/jquery.mobile-1.1.0-rc.1.min.js"></script>
	</head>
<body>



<div data-role="page">
  
    
    <div data-role="header" data-position="inline">
       	<!--<a href="#"><img src="img/shopping_cart_2 copy.png" alt="shopping cart" /></a>-->
		<?php  echo getUserNameLink(); ?>
        <h5><?php if (isset($page_title)) {
			echo $page_title;
		} else {
			echo 'eduNation - Group 6';
		}
		?></h5>
        <a href="#" class="ui-btn-right" data-inline="true">Log out</a>
    </div>
    <div id="headLogo">
    	<a href="home.php" class="ui-btn-right"><img src="img/EN_logo.png" alt="EduNation logo" width="330px" height="66px" /></a>
    </div>
    <div data-role="navbar">
							<ul>
							<!-- MENU -->
							<?php // Dynamically create header menus...
							
							// Array of labels and pages (without extensions):
							$pages = array (
								'PRODUCTS' => 'catalog.php',
								'FEATURED ITEMS' => 'featured.php',
								'CONTACT US' => 'contact.php'
							);

							// The page being viewed:
							$this_page = basename($_SERVER['PHP_SELF']);
							
							$tabnum = 1;
							// Create each menu item:
							foreach ($pages as $k => $v) {
								echo '<li>';
								//echo ' class="tab'.$tabnum.'"';
								echo '<a href="' . $v . '">' . $k . '</a></li>
								';
								//$tabnum++;
							} // End of FOREACH loop.
							
							// For some reason mikes code needs 4 list items to display correctly (quick hack)
							//while ($tabnum <= 4) {echo '<li></li>';$tabnum++;}
							
							?>
							
                            <li><a href="cart.php?action=viewCart">CART</a></li>
							</ul><!-- END MENU -->
				</div>
    
                        
   	<div data-role="content" id="headContent">
    	
			
                        
						<p class="center">Welcome Back!  Currently logged in as <?php echo getUserNameLink(); ?>.</p>
			
			
			
	
			<!-- Content goes below -->