<html>
<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Book Tickets</title>
		<link rel="stylesheet" href="desktop.css">
		<script type="text/javascript">
        function validate()
		{
   
var num=document.getElementById('cardno').value;
var no = num.replace(/\s/g,'');
var name=document.getElementById('cardname').value;
var year=document.getElementById('yeardropdown').value;
var month=document.getElementById('monthdropdown').value;
var scode=document.getElementById('seccode').value;
var addres=document.getElementById('address').value;
var baddres;
    if(document.getElementById('baddress').checked) 
         baddres = document.getElementById('address').value;
    else
        baddres = document.getElementById('billaddress').value; 
var pnum=document.getElementById('phonenum').value;
var flag;
var today=new Date();
var todaymonth=today.getMonth();
var todayyear=today.getFullYear();

if(no=="")
alert("Please enter credit card number!");
    
 if(name=="")
alert("Please enter card holder's name!");
    
 if(todayyear==year)
if(todaymonth>month)
alert("Select a valid expiry date!");
    
 if(scode=="" || scode.length != 3 || isNaN(scode))
alert("Please enter valid Security Code!");

 if(addres=="")
alert("Please enter Address");
    
 if(baddres=="")
alert("Enter Bill Address");
    
if(pnum=="" || pnum.length != 10 || isNaN(pnum))
alert("Enter Phone Number Please");
    
 if(no.charAt(0) == "5")
flag=mastercardvalidation(no);

 if(no.charAt(0)=="4")
flag=visacardvalidation(no);
    
 if(no.charAt(0)=="3" && no.charAt(1)=="4" || no.charAt(1)=="7")
flag=americanexpressvalidation(no);

}

    function americanexpressvalidation(no)
    {
      var cardno = /^(?:3[47][0-9]{13})$/;
      if(no.match(cardno))
            {
            alert("AMEX Transaction Successful!");
                return true;
            }
          else
            {
            alert("Not a valid Amercican Express credit card number! Either select a different card type or provide a valid card no.");
            return false;
            }
    }
    
    function visacardvalidation(no)
    {
      var cardno = /^(?:4[0-9]{12}(?:[0-9]{3})?)$/;
      if(no.match(cardno))
            {
             alert("VISA Transaction Successful!");
                return true;
             }
          else
            {
            alert("Not a valid Visa credit card number! Either select a different card type or provide a valid card no.");
            return false;
            }
    }
    
    function mastercardvalidation(no)
    {
      var cardno = /^(?:5[1-5][0-9]{14})$/;
      if(no.match(cardno))
            {
               alert("MASTERCARD Transaction Successful!");
                return true;
            }
          else
            {
            alert("Not a valid Mastercard number! Either select a different card type or provide a valid card no.");
            return false;
            }
    }
    

var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

function populatedropdown(monthfield, yearfield){
var today=new Date()
var monthfield=document.getElementById(monthfield)
var yearfield=document.getElementById(yearfield)
for (var m=0; m<12; m++)
monthfield.options[m]=new Option(monthtext[m],m)
monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], today.getMonth(), true, true) //select today's month
var thisyear=today.getFullYear()
for (var y=0; y<20; y++){
yearfield.options[y]=new Option(thisyear, thisyear)
thisyear+=1
}
yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
}


   </script>
	</head>
	<body topmargin="0" onload="populatedropdown('monthdropdown','yeardropdown')">
    <div class="navbar">
  <a href="home.php">World Travels</a>
  <a href="flightform.php">Book a flight</a>
  <a href="contactus.html">Contact Us</a>
  <a href="flights.html">Admin Use</a>
</div>
    <div class="transbox">
    <h1>World Travels</h1>
    <h2>Let us be a part of your Journey</h2>
	<h3>
	<?php 
	session_start();
	echo "User : " . $_SESSION["user"] . "<br>"; 
	?></h3>
	<center>
	<font size=10>
		 <form name="for1"  onsubmit="validate()" action = "ticket.php">
		<fieldset style="width:270px">
		<legend>
		<div style="color:#FF5733">
		<h1>Payment</h1>
		</div>
		</legend>
		 
        
         <table>

          <tr><td>Card No:
          <td><input id="cardno"></td><img id = "image" src="">
          </tr>
          <tr>
		  <td>Card Holder Name:
           <td><input id="cardname"></td>
           </tr>
			<tr>
			<td>Expiry Date:
			<td><select id="monthdropdown"></select>
			<select id="yeardropdown"></select>
			</td>
			</tr>
			<tr>
			<td>Security Code:
			<td><input id="seccode"></td>
			</tr>
			<tr><td>Address:
			<td><input id="address"></td>
			</tr>
			<tr>
			<td>Billing Address:
			<td>
			</tr>
			<td><input type="radio" id="baddress"value="Same"> Same as the Address
			</td>
			<td><input id="billaddress"></td>
			<tr><td>Phone Number:
			<td><input id="phonenum"></td>
			</tr>
			<tr><td>
			<input type="Submit" value="Submit" />
			<input type = "submit" value="Cancel" onclick="Book.php"/></tr>
			</table>
		</fieldset>
		</form>
		</font>
	</center>
	</div>
	</body>
	<footer>
  		<p>Created by: Us</p>
  			<p>Contact information: <a href="mailto:snuthalapati1@studnet.gsu.edu">Us</a>.</p>
</footer>

</html>