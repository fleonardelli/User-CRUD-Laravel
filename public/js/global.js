$('form').submit(function(e){
	e.preventDefault();
	if(validate()){
		$.ajax({
		  url: 'http://localhost/api/users',
		  type: 'POST',
		  data: $('form').serialize(),
		  success: function(data) {
		  	alert("The user was created successfully with id " + data.id);
		  },
		  error: function(data) {
		  	message = "";
		  	$.each(data.responseJSON.data, function(i,e){
				message += e;
			});
			alert(message);
		  }
		});
	}
});

function validate(){
	if ($('#name').length == 0) {
		alert("Name can not be empty");
		return false;
	}
	if ($('#email').length == 0) {
		alert("Name can not be empty");
		return false;
	}
	if ($('#password').length == 0) {
		alert("Name can not be empty");
		return false;
	}
	return true;
}