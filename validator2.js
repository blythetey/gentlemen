// validator2.js
//   An example of input validation using the change and submit 
//   events, using the DOM 2 event model
//   Note: This document does not work with IE8

// ********************************************************** //
// The event handler function for the name text box

function chkName(event) {

// Get the target node of the event

  var myName = event.currentTarget;

// Test the format of the input name 
//  Allow the spaces after the commas to be optional
//  Allow the period after the initial to be optional

  var pos = myName.value.search(/[\D]+[\s]+[\D]/);

  if (pos != 0) {
    alert("The name you entered (" + myName.value + 
          ") is not in the correct form. \n" +
          "The correct form is: " +
          "First name space Last name & \n");
		  
    myName.focus();
    myName.select();
	return false;
  } 
}

// ********************************************************** //
// The event handler function for the phone number text box

function chkEmail(event) {

// Get the target node of the event

  var myPhone = event.currentTarget;

// Test the format of the input phone number
 
  var pos = myPhone.value.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
 
  if (pos != 0) {
    alert("The email you entered (" + myPhone.value +
          ") is not in the correct form. \n" +
          "The correct form usernam@domainname \n" +
          "Please go back and fix your email");

        /*("The email you entered (" + myPhone.value +
          ") is not in the correct form. \n" +
          "The user name must contain a hyphen and a period \n" +
          "The domain name contains 2 to 4 extensions \n" +
          "Each extension is a string of word characters\n"
          "Separeted by a . and last extension be 2 to 3 characters");*/

    myPhone.focus();
    myPhone.select();
	return false;
  } 
}

function chkCreditCard(event)  
   {  
   
	  var myCreditCard = event.currentTarget
      var numbers = /^(?:5[1-5][0-9]{14})$/;  
      if(myCreditCard.value.match(numbers))  
      {  
       
      document.form1.text1.focus();  
      return true;  
      }  
      else  
      {  
      alert('Please input a valid MasterCard Credit Card Number');  
      document.form1.text1.focus();  
      return false;  
      }  
   }  

function chkDate(event) {

// Get the target node of the event
  var todaydate = today.toLocaleString();

  var myDate = event.currentTarget;

// Test the format of the input name 
//  Allow the spaces after the commas to be optional
//  Allow the period after the initial to be optional

  var pos = myDate.value.search(/todaydate/);

  if (pos != 0) {
    alert("The name you entered (" + myDate.value + 
          ") is not in the correct form. \n" +
          "The correct form is: " +
          "to include alphabet characters & \n" +
          "character spaces only");
    myDate.focus();
    myDate.select();
	return false;
  } 
}