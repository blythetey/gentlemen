<?php //AddtoCartShoe2.php
session_start();
if (!isset($_SESSION['cart'])){
	$_SESSION['cart'] = array();
}
if (isset($_GET['buy'])) {
	$_SESSION['cart'][] = $_GET['buy'];
	header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<link href="PHPstylesheet.php" type ="text/css" rel="stylesheet">
<title>Product catalog</title>
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
          <li><a href="ShoppingCart.php"> Cart</a></li>
        </ul>
      </div>
    </div>
<div class="arrival">	
<table align="center" >
<tr><td align="center" colspan="3"><img src="airmax.jpg" alt="shoes1" style="width:500px;height:600px;"></td></tr>
<tr> <th align="center" colspan="3"><font size="7">Your shopping cart contains <?php 
	echo count($_SESSION['cart']); ?> items.</font></tr> </th>
<tr> <td align="center" colspan="3"><a href="ShoppingCart.php"><font size="7">View your cart</font></tr> </td>

<?php
$items = array(
	'Shoe 1',
	'Shoe 2',
	'Shoe 3',
	'Shoe 4',
	'Shoe 5',
	'Shoe 6',
	'Shoe 7',
	'Shoe 8',
	'Shoe 9',
	'Shoe 10',
	'Shoe 11',
	'Shoe 12');
$prices = array(24.95, 1000, 19.99, 34.95,24.95, 1000, 19.99, 34.95,24.95, 1000, 19.99, 34.95);
?>

	
	<tr>
		<th><font size="7">Item Description</font></th>
		<th><font size="7">Price</font></th>
	</tr>

	<tbody>
<?php
//for ($i=0; $i<count($items); $i++){
	echo "<tr>";
	
	echo "<td><font size='20'>" .$items[1]. "</font></td>";
	echo "<td><font size='20'>$" .number_format($prices[1], 2). "</font></td>";
	echo "<td><a href='" .$_SERVER['PHP_SELF']. '?buy=' .'1'. "'><font size='7'>Add to Cart</font></a></td>";
	echo "</tr>";
//}
?>
	</tbody>
	
</table>
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