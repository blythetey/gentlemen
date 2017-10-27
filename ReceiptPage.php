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
<html>
<head>
  <title>Gentlemen's Shoes - Receipt Page</title>
</head>
<body>
<h1>Gentlemen's Shoes</h1>
<?php
  // create short variable names
  $FirstName=$_POST['FirstName'];
  $LastName=$_POST['LastName'];
  $Address=$_POST['Address'];
  $Email=$_POST['Email'];

  if (!$FirstName || !$LastName || !$Address || !$Email) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  } 

  if (!get_magic_quotes_gpc()) {
    $FirstName = addslashes($FirstName);
    $LastName = addslashes($LastName);
    $Address = addslashes($Address);
    $Email = doubleval($Email);
  }

  @ $db = new mysqli('localhost', 'f34ee', 'f34ee', 'f34ee');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

  $query = "insert into GentlemenCustomers values
            ('".$FirstName."', '".$LastName."', '".$Address."', '".$Email."')";
  $result = $db->query($query);

  if ($result) {
      //echo  $db->affected_rows." book inserted into database.";
  } else {
  	  echo "An error has occurred.  The item was not added.";
  }

  $db->close();
?>
<h2>Thank you for shopping with us!</h2>
<?php
$items = array(
	'Shoe 1',
	'Shoe 2',
	'Shoe 3',
	'Shoe 4');
$prices = array(24.95, 1000, 19.99, 34.95);
?>
<table border="1">
<?php
	date_default_timezone_set("Asia/Singapore");
	echo date_default_timezone_get();
	echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

	echo "<p>Your order is as follows: </p>";
	
	$total = 0;
	for ($i=0; $i < count($_SESSION['cart']); $i++){
		echo "<tr>";
		echo "<td>" .$items[$_SESSION['cart'][$i]]. "</td>";
		echo "<td align='right'>$";
		echo number_format($prices[$_SESSION['cart'][$i]], 2). "</td>";
		echo "</tr>";
		$total = $total + $prices[$_SESSION['cart'][$i]];
	}

	
	//echo "Subtotal: $".number_format($totalamount,2)."<br />";

	$taxrate = 0.10;  // local sales tax is 10%
	$totalamount = $totalamount * (1 + $taxrate);
	//echo "Total including tax: $".number_format($totalamount,2)."<br />";

	if($find == "a") {
	  echo "<p>Regular customer.</p>";
	} elseif($find == "b") {
	  echo "<p>Customer referred by TV advert.</p>";
	} elseif($find == "c") {
	  echo "<p>Customer referred by phone directory.</p>";
	} elseif($find == "d") {
	  echo "<p>Customer referred by word of mouth.</p>";
	} else {
	 // echo "<p>We do not know how this customer found us.</p>";
	}

?>
<tr>
		<th align='right'>Total:</th><br>
		<th align='right'>$<?php echo number_format($total, 2); ?>
		</th>
	</tr>
</table>
</body>
</html>
