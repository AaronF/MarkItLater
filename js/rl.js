$(document).ready(function(){
	$("#add_form").on("submit", function(){
		$("#add_loader").html("<i class='icon-spinner icon-spin'></i>");
		$('#input_link').prop('disabled', true);
		var link = $("#input_link").val();
		var data = "link="+link+"&user_key=<? echo $loggedInUser->user_key;?>";
		$.ajax({
			type: "POST",
			url: "forms/add.php",
			data: data,
			success: function(msg){
				$("#add_loader").html('');
				$('#input_link').prop('disabled', false);
				$("#input_link").val("");
				$("#input_link").focus();
				$("#list_items").load( "get/list.php", function() {});
			}
		});
		return false;
	});
});