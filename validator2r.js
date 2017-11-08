// validator2r.js
//   The last part of validator2. Registers the 
//   event handlers
//   Note: This script does not work with IE8

// Get the DOM addresses of the elements and register 
//  the event handlers

 //     var customerNode = document.getElementById("name");
      var EmailNode = document.getElementById("Email");
	  var CreditCardNode = document.getElementById("CreditCard");
//	  var dateNode = document.getElementById("startdate");
 //     customerNode.addEventListener("change", chkName, false);
      EmailNode.addEventListener("change", chkEmail, false);
	  CreditCardNode.addEventListener("change", chkCreditCard, false);
//	  dateNode.addEventListener("change", chkDate, false);
