function listenerChangeStatus(url){

	$(".switchStatus").change(function(){
		$.ajax({
			url: url,
			type: 'post',
			data: {
				id: $(this).attr("id").replace(/status-/g, ''),
				_csrf : yii.getCsrfToken()
			},
			success: function () {
				console.log(true);
			},
			error: function () {
				console.log(false);
			}
		});
	});
}

function listenerChangeFeatured(url){

	$(".switchFeatured").change(function(){
		$.ajax({
			url: url,
			type: 'post',
			data: {
				id: $(this).attr("id").replace(/featured-/g, ''),
				_csrf : yii.getCsrfToken()
			},
			success: function () {
				console.log(true);
			},
			error: function () {
				console.log(false);
			}
		});
	});
}

function listenerRegionsSelect() {

	$('#properties-region').on('change', function() {
		var id = $('#properties-region').val();
		$.ajax({
			url: 'communes',
			type: 'post',
			data: {
				id: id,
				_csrf : yii.getCsrfToken()
			},
			success: function (data) {
				console.log(true);
				$('#properties-zone').html(data);
			},
			error: function () {
				console.log(false);
			}
		});
	});

}
