function validate()
{
	bool = true;
    
	var email = document.getElementById("email");
	var vemail = email.value;

	var password = document.getElementById("password");
	var vpassword = password.value;


	if(vemail.trim() == "")
	{
		email.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "Email cannot be empty";
		bool = false;
	}
	else if(!/\S+@\S+\.\S+/.test(vemail))
	{
		email.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "Not an email address";
		bool = false;
	}
	else if(vpassword.trim() == "")
	{
		email.style.border = null;
		password.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "Password cannot be empty";
		bool = false;
	}


	else
	{
		document.getElementById("msg").innerHTML = "";
	}
	return bool;
}