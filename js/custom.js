$(document).ready(function(){

	// Custom Star Rating Code
	$(document).on('mouseover', '.star li', function(){
		$(this).find('.fa-star').css("color", "#c17400");
		$(this).css("color", "#c17400 !important").prevAll().css("color", "#c17400");
	});
	$(document).on('mouseleave', '.star li', function(){
		$(this).find('.fa-star').css("color", "#F89C0E");
		$('li').css("color", "#F89C0E");
	});
	$(document).on('click', '.star li', function(){
		
		var userId = $(this).closest('tr').find('input').val();
		var rating = $(this).data('id');

		$.ajax({
			url: "rating_process.php",
			method: "POST",
			data: {userId: userId, rating: rating},
			success: function(data){
				
				get_content();				
			}
		});

	});

	function get_content(){

		$.ajax({
			url: "content.php",
			method: "POST",
			success: function(data){
				
				$('#tbody').html(data);
			}
		});
	}
	get_content();
	
});