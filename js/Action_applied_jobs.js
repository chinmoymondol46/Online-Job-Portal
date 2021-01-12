$(document).ready(function(){  

	load_data();
    
	function load_data()
	{
		$.ajax({
			url:"controllers/Fetch_applied_jobs.php",
			method:"POST",
			success:function(data)
			{
				$('#user_data').html(data);
			}
		});
	}
	$('#done_confirmation').dialog({
		autoOpen:false,
		modal: true,
		buttons:{
			Ok : function(){
				var id = $(this).data('id');
				var action = 'done';
				$.ajax({
					url:"controllers/Action_applied_jobs.php",
					method:"POST",
					data:{id:id, action:action},
					success:function(data)
					{
						$('#done_confirmation').dialog('close');
						$('#action_alert').html(data);
						$('#action_alert').dialog('open');
						load_data();
					}
				});
			},
			Cancel : function(){
				$(this).dialog('close');
			}
		}	
	});
	
	$(document).on('click', '.done', function(){
		var id = $(this).attr("id");
		$('#done_confirmation').data('id', id).dialog('open');
	});
});  