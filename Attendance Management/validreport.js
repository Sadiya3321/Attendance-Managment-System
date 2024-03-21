function report()
{
	var  yes=document.getElementById('sem1').checked;
	var no=document.getElementById('sem2').checked;
	var dd=document.getElementById("d2").value;
	var clist=document.getElementById("classlist");
	var user=clist.options[clist.selectedIndex].value;
	var slist=document.getElementById("sublist");
	var user1=slist.options[slist.selectedIndex].value;
	if(user=="none")
	{
	alert("Please select class.");
	return false;
	}
	

		if ((yes==false)&&(no==false)) 
	{ 
		window.alert("Please select semester."); 
		 
		return false; 
	}

	if(dd=="none")
	{
	window.alert("Please select date.");
	return false;
	}
	
	if(user1=="none")
	{
	window.alert("Please select subject.");
		return false;
	}
		

	
return true;
}