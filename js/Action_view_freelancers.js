
$(document).ready(function(){  

	load_data();
    
	function load_data()
	{
		$.ajax({
			url:"controllers/Fetch_view_freelancers.php",
			method:"POST",
			success:function(data)
			{
				$('#user_data').html(data);
			}
		});
	}	
	
	$('#action_alert').dialog({
		autoOpen:false
	});
	
	$('#form_action').on('click', function(event){
		event.preventDefault();
		$.ajax({
			url:"controllers/Fetch_view_freelancers.php",
			data:{'search': $('#form_search').val()},
			method:"POST",
			success:function(data)
			{
				$('#user_data').html(data);
			}
		});
	});
	
	$('#form_search').keypress(function (event){
		if(event.which == 13){
			$('#form_action').trigger('click');
		}
	});
});