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
  <style>


div {
    background-color: #1D2731;
		color: #ffffff;
		text-align: center;
		padding: 10px;
		font-family: Lucida Blackletter;
		font-size: 60px;
		
		width: 100%;
}

</style>
</head>
<body>
<div>
   <center> Gentlemen. <img src="gentlemen.png" align="center" height="auto" width="auto" alt="Homepage.html"></center>
    </div>

<h1 align = 'center'>Gentlemen's Shoes</h1>
<?php
	date_default_timezone_set("Asia/Singapore");
	
  // create short variable names
  $FirstName=$_POST['FirstName'];
  $LastName=$_POST['LastName'];
  $Address=$_POST['Address'];
  $Email=$_POST['Email'];
  $Creditcard=$_POST['Creditcard'];
  $CreditcardDate=$_POST['CreditcardDate'];
  $SecCode=$_POST['SecCode'];

  if (!$FirstName || !$LastName || !$Address || !$Email || !$Creditcard || !$CreditcardDate || !$SecCode) {
     echo "You have not entered all the required details.<br />"
          ."Please go back and try again.";
     exit;
  } 

  if (!get_magic_quotes_gpc()) {
    $FirstName = addslashes($FirstName);
    $LastName = addslashes($LastName);
    $Address = addslashes($Address);
    $Email = addslashes($Email);
	$Creditcard = addslashes($Creditcard);
	$CreditcardDate = addslashes($CreditcardDate);
	$SecCode = doubleval($SecCode);
	$datedate = date('l jS \of F Y h:i:s A');
	$message  = date('l jS \of F Y h:i:s A');
  }

  @ $db = new mysqli('localhost', 'f34ee', 'f34ee', 'f34ee');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }

  $query = "insert into GentlemenCustomers values
            ('".$FirstName."', '".$LastName."', '".$Address."', '".$Email."', '".$Creditcard."', '".$CreditcardDate."', '".$SecCode."', '".$datedate."')";
  $result = $db->query($query);

  if ($result) {
      //echo  $db->affected_rows." book inserted into database.";
  } else {
  	  echo "An error has occurred.  The item was not added.";
  }

  $db->close();
?>
<h2 align = 'center'>Thank you for shopping with us!Please take a screenshot of this page as a receipt</h2>
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
<table align = 'center'>
<?php
	
	echo date_default_timezone_get();
	echo "<p align = 'center'>Order processed at ".date('H:i, jS F Y')."</p>";

	echo "<p align = 'center'>Your order is as follows: </p>";
	
	$total = 0;
	for ($i=0; $i < count($_SESSION['cart']); $i++){
		echo "<tr>";
		echo "<td>" .$items[$_SESSION['cart'][$i]]. "</td>";
		$message .= $items[$_SESSION['cart'][$i]].", ";
		$Customermessage .= $items[$_SESSION['cart'][$i]];
		echo "<td align='right'>$";
		echo number_format($prices[$_SESSION['cart'][$i]], 2). "</td>";
		$Customermessage .= "-".$items[$_SESSION['cart'][$i]].", ";
		echo "</tr>";
		$total = $total + $prices[$_SESSION['cart'][$i]];
	}

	 @ $db1 = new mysqli('localhost', 'f34ee', 'f34ee', 'f34ee');

	if (mysqli_connect_errno()) {
		echo "Error: Could not connect to database.  Please try again later.";
		exit;
	}
	$message1 = doubleval($message);
	$query1 = "insert into order_items values
            ('".$message1."')";
	$result1 = $db->query($query1);
	
	if ($result1) {
      //echo  $db->affected_rows." book inserted into database.";
	} else {
		echo "An error has occurred.  The item was not added.";
	}

	//echo "Subtotal: $".number_format($totalamount,2)."<br />";

	//$taxrate = 0.10;  // local sales tax is 10%
	//$totalamount = $totalamount * (1 + $taxrate);
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

$to      = 'f34ee@localhost';
$subject = 'the subject';

$headers = 'From: f34ee@localhost' . "\r\n" .
    'Reply-To: f34ee@localhost' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers,'-ff34ee@localhost');
//echo ("mail sent to : ".$to);

mail($to, $subject, $message, $headers,'-shaunpwl@gmail.com');
//echo ("mail sent to : ".$to);

?>
<tr>
		<th align='right'>Total:</th><br>
		<th align='right'>$<?php echo number_format($total, 2); ?>
		</th>
	</tr>
</table>
</body>
</html>
