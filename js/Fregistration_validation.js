function validate()
{
	bool = true;

	var fname = document.getElementById("fname");
	var vfname = fname.value;

	var lname = document.getElementById("lname");
	var vlname = lname.value;

	var gender = document.getElementsByName("gender");
    
	var email = document.getElementById("email");
	var vemail = email.value;

	var skills = document.getElementById("skills");
	var vskills = skills.value;

	var nid = document.getElementById("nid");
	var vnid = nid.value;

	var password = document.getElementById("password");
	var vpassword = password.value;

	var cpassword = document.getElementById("cpassword");
	var vcpassword = cpassword.value;



	if(vfname.trim() == "")
	{
		fname.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "First Name cannot be empty";
		bool = false;
	}
	else if(!/^[a-zA-Z -]*$/.test(vfname))
	{
		fname.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "First Name must contain letters";
		bool = false;
	}
	else if(vlname.trim() == "")
	{
		fname.style.border = null;
		lname.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "Last Name cannot be empty";
		bool = false;
	}
	else if(!/^[a-zA-Z -]*$/.test(vlname))
	{
		fname.style.border = null;
		lname.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "Last Name must contain letters";
		bool = false;
	}
	else if(!(gender[0].checked || gender[1].checked || gender[2].checked))
	{
		fname.style.border = null;
		lname.style.border = null;
		document.getElementById("msg").innerHTML = "Must select one from Gender";
		bool = false;
	}
	else if(vemail.trim() == "")
	{
		fname.style.border = null;
		lname.style.border = null;
		email.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "Email cannot be empty";
		bool = false;
	}
	else if(!/\S+@\S+\.\S+/.test(vemail))
	{
		fname.style.border = null;
		lname.style.border = null;
		email.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "Not an email address";
		bool = false;
	}
	else if(vskills.trim() == "")
	{
		fname.style.border = null;
		lname.style.border = null;
		email.style.border = null;
		skills.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "Skills cannot be empty";
		bool = false;
	}
	else if(vnid.trim() == "")
	{
		fname.style.border = null;
		lname.style.border = null;
		email.style.border = null;
		skills.style.border = null;
		nid.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "NID cannot be empty";
		bool = false;
	}
	else if(!/^[0-9]*$/.test(vnid))
	{
		fname.style.border = null;
		lname.style.border = null;
		email.style.border = null;
		skills.style.border = null;
		nid.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "NID must contain unspaced numbers";
		bool = false;
	}
	else if(vnid.length > 20)
	{
		fname.style.border = null;
		lname.style.border = null;
		email.style.border = null;
		skills.style.border = null;
		nid.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "NID not be more than 20 digits";
		bool = false;
	}
	else if(vpassword.trim() == "")
	{
		fname.style.border = null;
		lname.style.border = null;
		email.style.border = null;
		skills.style.border = null;
		nid.style.border = null;
		password.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "Password cannot be empty";
		bool = false;
	}
	else if(strlen(vpassword) < 8)
	{
		fname.style.border = null;
		lname.style.border = null;
		email.style.border = null;
		skills.style.border = null;
		nid.style.border = null;
		password.style.border = "solid 3px red";
		document.getElementById("msg").innerHTML = "Password must not be less than eight (8) characters";
		bool = false;
	}
	else if(vpassword != vcpassword)
	{
		fname.style.border = null;
		lname.style.border = null;
		email.style.border = null;
		skills.style.border = null;
		nid.style.border = null;
		password.style.border = null;
		cpassword.style.border = "solid 3px red";
	  	document.getElementById("msg").innerHTML = "Confirmed Password must match with the Password";
		bool = false;
	}


	else
	{
		document.getElementById("msg").innerHTML = "";
	}
	return bool;
}