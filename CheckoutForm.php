<html>
<body>
<form action="ReceiptPage.php" method="post">
<table border="0">
<tr bgcolor="#cccccc">
  <td width="150">Details</td>
  <td align="center" width="15">Please fill in all the blanks:</td>
</tr>
<tr>
  <td>First Name</td>
  <td align="center"><input type="text" name="FirstName" size="15"
     maxlength="20"></td>
</tr>
<tr>
  <td>Last Name</td>
  <td align="center"><input type="text" name="LastName" size="15" maxlength="20"></td>
</tr>
<tr>
  <td>Address & Postal Code</td>
  <td align="center"><input type="text" name="Address" size="15"
     maxlength="20"></td>
</tr>
<tr>
  <td>Email</td>
  <td align="center"><input type="text" name="Email" size="15"
     maxlength="20"></td>
</tr>
<tr>
  <td>Credit Card number</td>
  <td align="center"><input type="text" name="Creditcard" size="15"
     maxlength="20"></td>
</tr>
<tr>
  <td>Secuirty code</td>
  <td align="center"><input type="text" name="SecCode" size="3"
     maxlength="3"></td>
</tr>
<tr>
  <td>How did you find Bob's?</td>
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
</body>
</html>