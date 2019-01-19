$(document).ready(function(){

	var url = '../php/myphp.php';

	//for ticket operator
	$('.ticket').click(function(e){
		var id = $(e.target).val();
		$.ajax({
			url: url,
			type: 'POST',
			data: { id: id,
					action: 'update'
					},
			success: function (data){
				data = JSON.parse(data);
				$('#num-panel').html(data.name + ' - ' + data.tail);
			}
		});
	});


	//for personnel
	var personnel = {
			reset: function(){
				$.ajax({
					url: url,
					type: 'POST',
					data: { action: 'reset' },
					success: function(){
						window.location.replace('');
					}
				});				
			},
			serving: function(id){
				$.ajax({
					url: url,
					type: 'POST',
					data: { id: id, action: 'serving' },
					success: function(data){
						data = JSON.parse(data);
						$('#panel').html(data.name + ' - ' + data.current)
					}
				});
			}
	}

	$('.kurso').click(function(e){
		var song = new Audio();
	    song.src = "paging.mp3";
	    song.play();
		var id = $(e.target).val();
		$('#next').attr('value',id); //assign id to the next button for reference for the upcoming next clicks
		$('#next').prop('disabled',false);
		personnel.serving(id);
	});

	$('#next').click(function(e){
		var song = new Audio();
	    song.src = "paging.mp3";
	    song.play();
		var id = $(e.target).val();
		personnel.serving(id);
	});

	$('#reset').click(function(e){	personnel.reset(); });

});