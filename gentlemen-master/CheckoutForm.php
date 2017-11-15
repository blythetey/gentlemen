<html>
<head>
<link href="PHPstylesheet.php" type ="text/css" rel="stylesheet">
<title>Checkout Form</title>
<script type = "text/javascript"  src = "validator2.js" ></script>
</head>

<body>

<div id="wrapper">
<div id="header"> <center> Gentlemen. <img src="gentlemen.png" align="center" height="auto" width="auto" alt="Homepage.html"></center>
</div></div>
 <div class="row">
 <div class="column00"> 
 <ul>
  <li><a href="Homepage.html">Home</a></li>
  <li><a href="Products.html">Products</a></li>
  <li><a href="AboutUs.html">About Us</a></li>
  <li><a href="ShoppingCart.php"> Cart</a></li>
  </ul>
  </div>
</div>

<div class="cart3">	
<p>
<form action="ReceiptPage.php" method="post">
<table align = 'center' style="color:black; font-size:25px;" border="0">
<tr bgcolor="#cccccc">
  <td >Details</td>
  <td align="center" >Please fill in all the blanks:</td>
</tr>
<tr>
  <td>First Name</td>
  <td align="center"><input type="text" name="FirstName" size="30"
     maxlength="20"></td>
</tr>
<tr>
  <td>Last Name</td>
  <td align="center"><input type="text" name="LastName" size="30" maxlength="20"></td>
</tr>
<tr>
  <td>Address & Postal Code</td>
  <td align="center"><input type="text" name="Address" size="30"
     maxlength="20"></td>
</tr>
<tr>
  <td>Email</td>
  <td align="center"><input type="text" name="Email" id="Email" size="30"
     maxlength="20"></td>
</tr>
<tr>
  <td>Credit Card number</td>
  <td align="center"><input type="text" name="Creditcard" id = "CreditCard" size="30"
     maxlength="16"></td>
</tr>
<tr>
  <td>Credit Card Expiry Date MMYY</td>
  <td align="center"><input type="text" name="CreditcardDate"  size="30"
     maxlength="4"></td>
</tr>
<tr>
  <td>Secuirty code</td>
  <td align="center"><input type="text" name="SecCode" size="30"
     maxlength="3"></td>
</tr>
<tr>
  <td>How did you find Gentlemens's?</td>
  <td><select name="find">
        <option value = "a">I'm a regular customer</option>
        <option value = "b">TV advertising</option>
        <option value = "c">Phone directory</option>
        <option value = "d">Word of mouth</option>
      </select>
  </td>
</tr>
<tr>
  <td colspan="2" align="center"><input type="submit" value="Submit Order"></td>
</tr>
</table>
</form>
</p>
</div>
<script type = "text/javascript"  src = "validator2r.js" ></script> 

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