var items = [];
var index = 0;

function renderItem(item, val) {
	return `${item[val]}`;
}

function render() {
	var item = items[0];
	var name = renderItem(item, 'name');
	var location = renderItem(item, 'location');


	$("#serialNum").html(
		String(index + 1).padStart(2, '0')
	);
	$("#currentName").html(name);
	$("#currentLocation").html(location);
}

function getPeopleData(index = 0) {
	$.ajax({
		url: '/api.php?index=' + index,
		type: 'get',
		dataType: 'json',
		success: function (data) {
			if (data.status === 200) {
				items = [data];
				render();
			} else if (data.status === 204) {
				alert('No more people!');
			}
		}
	});
}

function next() {
	getPeopleData(index += 1);
}


$(window).on("load", function () {
	getPeopleData();
});