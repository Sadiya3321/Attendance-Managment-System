function valid()								 
{ 
	var fname = document.forms["f"]["fn"];
    	 var lname = document.forms["f"]["ln"];
	var uname = document.forms["f"]["un"];			 
	var pwd = document.forms["f"]["pw"]; 
	var rpwd = document.forms["f"]["rpw"]; 
	var email= document.forms["f"]["e"];
	var address = document.forms["f"]["add"]; 
	var no=document.forms["f"]["n"];
	if (fname.value == "")								 
	{ 
		window.alert("Please enter your details."); 
		fname.focus(); 
		return false; 
	}
	le = /^[A-Za-z]+$/;
	 if(!le.test(fname.value))
	 {	 
	window.alert("Firstname must contain only letters!"); 
	fname.focus();
 	return false;
 	} 
	if (lname.value == "")								 
	{ 
		window.alert("Please enter your last name."); 
		lname.focus(); 
		return false; 
	}
	le = /^[A-Za-z]+$/;
	 if(!le.test(lname.value))
	 {	 
	window.alert("Lastname must contain only letters!"); 
	lname.focus();
 	return false;
 	}  
	if (uname.value == "")								 
	{ 
		window.alert("Please enter your user name."); 
		uname.focus(); 
		return false; 
	}
	re = /^\w+$/;
	 if(!re.test(uname.value))
	 {	 
	window.alert("Username must contain only letters, numbers and underscores!"); 
	uname.focus();
 	return false;
 } 
		

 	if(pwd.value== "" )
	{
	window.alert("Please enter your password."); 
		pwd.focus(); 
		return false; 
	}

	if(rpwd.value != pwd.value) 
 	{	 
	window.alert(" Password and confirm password is not same!");
 	pwd.focus(); 
	return false;
 }
	p=/^([a-z]+)+[a-z0-9_\+-]+(\.[a-z 0-9_]+)*@[a-z 0-9_]+(\.[a-z 0-9_]+)*\.([a-z]{2,3})$/;
	if(!p.test(email.value))
	{
		window.alert("Email is not valid");
		email.focus();
		return false;
	}
	if (address.value == "")							 
	{ 
		window.alert("Please enter your address."); 
		address.focus(); 
		return false; 
	} 
	 no1=/^\d{10}$/;
	if(!no1.test(no.value))
	{
	window.alert("Number must be of 10 digits.");
		no.focus();
		return false;
	} 

	
	return true; 
}