$(document).ready(function(){  

	load_data();
    
	function load_data()
	{
		$.ajax({
			url:"controllers/Fetch_posted_jobs.php",
			method:"POST",
			success:function(data)
			{
				$('#user_data').html(data);
			}
		});
	}
	
	$("#user_dialog").dialog({
		autoOpen:false,
		width:400
	});
	
	$('#user_form').on('submit', function(event){
		event.preventDefault();
		$('#form_action').attr('disabled', 'disabled');
		var form_data = $(this).serialize();
		$.ajax({
			url:"controllers/Action_posted_jobs.php",
			method:"POST",
			data:form_data,
			success:function(data)
			{
				$('#user_dialog').dialog('close');
				$('#action_alert').html(data);
				$('#action_alert').dialog('open');
				load_data();
				$('#form_action').attr('disabled', false);
			}
		});
	
	});
	
	$('#action_alert').dialog({
		autoOpen:false
	});
	
	$(document).on('click', '.edit', function(){
		var id = $(this).attr('id');
		var action = 'fetch_single';
		$.ajax({
			url:"controllers/Action_posted_jobs.php",
			method:"POST",
			data:{id:id, action:action},
			dataType:"json",
			success:function(data)
			{
				$('#title').val(data.title);
				$('#description').val(data.description);
				$('#amount').val(data.amount);
				$('#duration').val(data.duration);
				$('#status').val(data.status);
				$('#action').val('update');
				$('#hidden_id').val(id);
				$('#form_action').val('Update');
				$('#user_dialog').dialog('open');
			}
		});
	});
	
	$('#delete_confirmation').dialog({
		autoOpen:false,
		modal: true,
		buttons:{
			Ok : function(){
				var id = $(this).data('id');
				var action = 'delete';
				$.ajax({
					url:"controllers/Action_posted_jobs.php",
					method:"POST",
					data:{id:id, action:action},
					success:function(data)
					{
						$('#delete_confirmation').dialog('close');
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
	
	$(document).on('click', '.delete', function(){
		var id = $(this).attr("id");
		$('#delete_confirmation').data('id', id).dialog('open');
	});
	
});  