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
<title>Product catalog</title>
</head>
<body>
<p>Your shopping cart contains <?php
	echo count($_SESSION['cart']); ?> items.</p>
<p><a href="ShoppingCart.php">View your cart</a></p>

<?php
$items = array(
	'Shoe 1',
	'Shoe 2',
	'Shoe 3',
	'Shoe 4');
$prices = array(24.95, 1000, 19.99, 34.95);
?>
<table border="1">
	<thead>
	<tr>
		<th>Item Description</th>
		<th>Price</th>
	</tr>
	</thead>
	<tbody>
<?php
//for ($i=0; $i<count($items); $i++){
	echo "<tr>";
	echo "<td>" .$items[1]. "</td>";
	echo "<td>$" .number_format($prices[1], 2). "</td>";
	echo "<td><a href='" .$_SERVER['PHP_SELF']. '?buy=' .'1'. "'>Buy</a></td>";
	echo "</tr>";
//}
?>
	</tbody>
</table>
<p>All prices are in imaginary dollars.</p>
</body>
</html>