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

function listenerCover() {
	$('.kv-file-cover').on('click', function() {
	    var $btn = $(this), key = $btn.data('key');
			$.ajax({
				url: 'cover',
				type: 'post',
				data: {
					id: key,
					_csrf : yii.getCsrfToken()
				},
				success: function (data) {
					$('.kv-file-cover').each(function () {
						$(this).removeClass('btn-success');
					});
					$btn.toggleClass('btn-default');
					$btn.addClass('btn-success');
				},
				error: function () {
					console.log(false);
				}
			});
	});
}

// Column chart
// ------------------------------

// Initialize chart
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(drawColumn);

// Chart settings
function drawColumn(properties) {

		var array = [['Propiedad', 'Visitas']];
		for (var i in properties) {
			array.push([i, properties[i]]);
		}

    // Data
    var data = google.visualization.arrayToDataTable(array);

    // Options
    var options_column = {
        fontName: 'Roboto',
        height: 400,
        fontSize: 12,
        chartArea: {
            left: '5%',
            width: '90%',
            height: 350
        },
        tooltip: {
            textStyle: {
                fontName: 'Roboto',
                fontSize: 13
            }
        },
        vAxis: {
            title: 'Cantidad de visitas',
            titleTextStyle: {
                fontSize: 13,
                italic: false
            },
            gridlines:{
                color: '#e5e5e5',
                count: 10
            },
            minValue: 0
        },
        legend: {
            position: 'top',
            alignment: 'center',
            textStyle: {
                fontSize: 12
            }
        }
    };

    // Draw chart
    var column = new google.visualization.ColumnChart($('#google-column')[0]);
    column.draw(data, options_column);
}
