function validclass()
{
	var  yes=document.getElementById('sem1').checked;
	var no=document.getElementById('sem2').checked;
	var  t1=document.getElementById('th').checked;
	var pr1=document.getElementById('pr').checked;
	var  pa1=document.getElementById('p1').checked;
	var pa2=document.getElementById('p2').checked;
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


	if ((t1==false)&&(pr1==false)) 
	{ 
		window.alert("Please select type."); 
		 
		return false; 
	}

	if(user1=="none")
	{
	window.alert("Please select subject.");
		return false;
	}
		

	if ((pa1==false)&&(pa2==false)) 
	{ 
		window.alert("Please select paper."); 
		 
		return false; 
	}
	
return true;
}	