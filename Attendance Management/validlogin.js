function validate()								 
{ 	var  yes=document.getElementById('t').checked;
	var no=document.getElementById('a').checked;
	var uname = document.forms["f"]["un"];			 
	var pwd = document.forms["f"]["p"]; 
	var rpwd = document.forms["f"]["rpw"];  

	if ((yes==false)&&(no==false)) 
	{ 
		window.alert("Please select login type."); 
		 
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

	 

	
	return true; 
}