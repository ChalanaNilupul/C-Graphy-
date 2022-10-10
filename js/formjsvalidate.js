// JavaScript Document
function validatename()
{
	
	var fname= document.getElementById("username").value;
	
	if((fname == "")|| (fname == null))
		{
			alert("please enter username");
			return false;
		}
	return true;
}


function validateEmail()
{
	var email= document.getElementById("mail").value;
	var at= email.indexOf("@");
	var dt= email.lastIndexOf(".");
	var len= email.length; 
	
	if((at < 2)|| (dt-at < 2) || (len - dt < 2))
		{
			alert("please enter valid email address");
			return false;
		}
	return true;
}
function validatepassword()
{
	var pass=document.getElementById("password").value;
	var confirmpass=document.getElementById("confirm-password").value;

	if(pass.equals(confirmpass))
	{
		return true;
	}
	return false;
}




function validateAll()
{
	if(validatename() && validateEmail()   && validateOption() && validatepassword() ) // all the functions are return ture
		{
			alert("submited all");
	
		}
	else
	{
		Event.preventDefault(); // stop the refreshing the page & keep the correct values (avoid the refreshing we have to use Event.preventDefault() function)
	}
}