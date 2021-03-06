<?php  //cart.php
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="PHPstylesheet.php" type ="text/css" rel="stylesheet">
<title>Shopping Cart</title>
</head>
<body>
<div id="wrapper">
    <div id="header"> <center> Gentlemen. <img src="gentlemen.png" align="center" height="auto" width="auto" alt="Homepage.html"></center>
    </div></div>
	 <div class="row">
      <div class="column00"> 
        <ul>
          <li><a href="homepage.html">Home</a></li>
          <li><a href="Products.html">Products</a></li>
          <li><a href="AboutUs.html">About Us</a></li>
          <li><a class="active"  href="ShoppingCart.php"> Cart</a></li>
        </ul>
      </div>
    </div>

<div class="cart2">
<h1 style="color:black;" align="center">Your Shopping Cart </h1>
<?php
$items = array(
	'Sandals',
	'Casual Running Shoes',
	'Loafer Boat Shoes',
	'Vintage Waterproof Boots',
	'Street Style Shoes',
	'Daily Shoes',
	'Loafers ',
	'Fashion Street Shoes',
	'Casual Street Fashion',
	'Formal Shoes',
	'Vintage Formal Shoes',
	'Classic Oxford Shoes');
$prices = array(41.99, 142.99, 69.99, 199.99,49.99, 39.99, 55.99, 89.99,109.99, 76.99, 89.99, 199.99);
?>
<table style="color:black;" align="center" border="1">
	<thead>
	<tr>
		<th>Item Description</th>
		<th>Price</th>
	</tr>
	</thead>
	<tbody>
<?php
$total = 0;
for ($i=0; $i < count($_SESSION['cart']); $i++){
	echo "<tr>";
	echo "<td>" .$items[$_SESSION['cart'][$i]]. "</td>";
	echo "<td align='right'>$";
	echo number_format($prices[$_SESSION['cart'][$i]], 2). "</td>";
	echo "</tr>";
	$total = $total + $prices[$_SESSION['cart'][$i]];
}
?>
	</tbody>
	<tfoot>
	<tr>
		<th align='right'>Total:</th><br>
		<th align='right'>$<?php echo number_format($total, 2); ?>
		</th>
	</tr>
	</tfoot>
</table>
</div>
<div class="cart1">
	<a href="Products.html"><font size ='5'>Continue Shopping</a> or
	<a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Empty your cart</a> or
	<a href="CheckoutForm.php">Checkout</font></a>
</div>


<div class="row">
      <div class="column2">
        <h2>About</h2>
        <br><br>
          <p><a href="AboutUs.html">About us</a></p>
          <p><a href="#">We're hiring</a></p>
          <p><a href="#">Support</a></p>
          <p><a href="#">Find store</a></p>
          <p><a href="#">Shipment</a></p>
          <p><a href="#">Payment</a></p>
          <p><a href="#">Gift card</a></p>
          <p><a href="#">Returns</a></p> 
          
      </div>

      <div class="column2">
        <h2> FAQ </h2>
        <p><br><a href="#">Help</a></p>
        <br>
        <h2> Ask Us Anything</h2>
        <form action="/action_page.php" target="_blank">
          <p> Name <input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required></p>
          <p> Email <input class="w3-input w3-border" type="text" placeholder="Email" name="Email" required></p>
          <p> Subject <input class="w3-input w3-border" type="text" placeholder="Subject" name="Subject" required></p>
          <p> Message <input class="w3-input w3-border" type="text" placeholder="Message" name="Message" required></p>
          <button type="submit" class="w3-button w3-block w3-black">Send</button><br><br>
        </form><br>
      </div>

      <div class="column2">
        <h2 class="h1"> Store </h2> <br>
          <p>
            <blockquote>
            <i class="fa fa-fw fa-map-marker"></i> Gentlemen.<br>
            Nanyang Technological University<br>
            School of Electrical & Electronic Engineering <br>          
            </blockquote>
          </p>
          <p><i class="fa fa-fw fa-phone"></i> +65 8888 9999<br></p>
          <p><i class="fa fa-fw fa-envelope"></i><a href="gentlemen@only.com">gentlemen@only.com <br></a></p>
          <br>
        <h2> We accept </h2>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Cards</p><br>
          <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
          <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
          <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
          <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
          <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
          <i class="fa fa-linkedin w3-hover-opacity w3-large"></i><br>
      </div>
    </div>   

  <div class="footer"> 
    Copyright&copy; 2017 Gentlemen<br>
    <a href="gentlemen@only.com">gentlemen@only.com</a><br>
  </div> <!-- Close Wrapper Div -->

</body>
</html>