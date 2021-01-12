$(document).ready(function(){  

	load_data();
    
	function load_data()
	{
		$.ajax({
			url:"controllers/Fetch_aview_outsourcers.php",
			method:"POST",
			success:function(data)
			{
				$('#user_data').html(data);
			}
		});
	}
	
	$('#form_action').on('click', function(event){
		event.preventDefault();
		$.ajax({
			url:"controllers/Fetch_aview_outsourcers.php",
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
	
	$('#delete_confirmation').dialog({
		autoOpen:false,
		modal: true,
		buttons:{
			Ok : function(){
				var id = $(this).data('id');
				var action = 'delete';
				$.ajax({
					url:"controllers/Action_aview_outsourcers.php",
					method:"POST",
					data:{id:id, action:action},
					success:function(data)
					{
						$('#delete_confirmation').dialog('close');
						//$('#action_alert').html(data);
						//$('#action_alert').dialog('open');
						location.reload();
						//$('tr  #'.id).remove();
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