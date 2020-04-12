$(document).ready(function () {
	$('form[id = "loginForm"]').validate({
		rules : {
			'email' : {
				required : true,
				email : true
			},
			'password' : {
				required : true,
			}
		},
		submitHandler : function(home) {
			form.submit();
		}
	});
});