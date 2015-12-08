var apiURL = 'http://localhost/task-manager-api/public/';
//var apiURL = 'http://45.55.241.20/';
var apiFunctionURL = ['activitybooks', 'activities', 'tasklists', 'tasks'];
var arrayPosition = 0;
$(window).load(function () {
	$.ajax({
		url: apiURL + apiFunctionURL[arrayPosition],
		dataType: 'json',
		type: 'get',
		success: function(data) {
			var addApiFunction = '<a onclick="window.location.replace(\'add_'+apiFunctionURL[arrayPosition]+'.php\')" style="cursor: pointer;">Add item</a>';
			$('#add-item').append(addApiFunction);
			$('#item-title').append(apiFunctionURL[arrayPosition]);
			$.each(data, function() {
				var json = this;
				var display = json.name;
				var outputHTML = '<h4 data-toggle="tooltip" data-placement="top" title="Active: '+ json.active +'\n Updated: '+ json.updated_at +'"><input type="radio" name="selection" value="'+json.id+'"> <a onclick="loadNewData('+ json.id +')" style="cursor: pointer;" class="white-text">'+ display +'</a></h4>';
				$('#api-data').append(outputHTML);	
			});
			loadJQueryStyling();
		}
	});
});
function loadNewData(id) {
	$.ajax({
		url: apiURL + apiFunctionURL[arrayPosition] + '/' + id,
		dataType: 'json',
		type: 'get',
		success: function(data) {
			arrayPosition++;
			$('#api-data').empty();
			$('#item-title').empty();
			$('#item-title').append(apiFunctionURL[arrayPosition]);
			$.each(data[apiFunctionURL[arrayPosition]], function() {
				var json = this;
				var display;
				if(arrayPosition >= 3) {
					display = json.description;
				} else {
					display = json.name;
				}
				var outputHTML = '<h4 data-toggle="tooltip" data-placement="top" title="Updated: '+ json.updated_at +'"><input type="checkbox" name="selection" value="'+json.id+'"><a onclick="loadNewData('+ json.id +')" style="cursor: pointer;" class="white-text"> '+ display +'</a></h4>';
				$('#api-data').append(outputHTML);
			});
			loadJQueryStyling();
		}
	});
}

function loadJQueryStyling() {
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
}
function updateItem() {
	var itemID = $("input[name=selection]:checked").val();
	if (itemID != null) {
		window.location.replace('update_'+apiFunctionURL[arrayPosition]+'.php?id='+itemID);
	} else if (itemID == null) {
		alert('Please select an item');
	}
}
function deleteItem() {
	var itemID = $("input[name=selection]:checked").val();
	if (itemID != null) {
		$.ajax({
			url: apiURL + apiFunctionURL[arrayPosition] + '/' + itemID,
			type: 'delete',
			data: itemID,
			success: function(data) {
				window.location.replace('home.php');
			}
		});
	} else if (itemID == null) {
		alert('Please select an item');
	}
}
