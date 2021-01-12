$(document).ready(function(){  

	//load_data();
    
	/* function load_data()
	{
		$.ajax({
			url:"controllers/Fetch_opersonal_information.php",
			method:"POST",
			success:function(data)
			{
				$('#user_data').html(data);
			}
		});
	} */

	//function load_data(){
		$.ajax({
			url:"controllers/Fetch_opersonal_information.php",
			method:"POST",
			dataType:"json",
			success:function(data)
			{
				$('#name').val(data[0].name);
				$('#email').val(data[0].email);
				$('#website').val(data[0].website);
			}
		});
	//};

	$(document).on('click','#upBtn', function (e) {
		$name = $('#name').val();
		$email = $('#email').val();
		$website = $('#website').val();
		$password = $('#password').val()

		if ($('#password').val() == $('#cpassword').val())
		$.ajax({
			url:"controllers/Action_opersonal_information.php",
			method:"POST",
			dataType:"json",
			data:{
				'name': $name,
				'email': $email,
				'website': $website,
				'password': $password,
				'action': 'update',
			},
			success:function(data)
			{
				if(data == true){	//if returned data is for acceptance, perform the following
						alert('profile updated');
						location.reload();
					} else {	//if returned data is for rejection, perform the following
						$('#password').css('border', 'red solid 3px')
						/*function myFunction() {
  							document.getElementById("msg").innerHTML = "password cannot be empty";
							}*/
					}
			}
		});
	});
});  