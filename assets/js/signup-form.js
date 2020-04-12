$(document).ready(function () {
	$('form[id = "signupForm"]').validate({
		rules : {
			'name' : {
				required : true,
				minlength : 2,
				maxlength : 20
			},
			'email' : {
				required : true,
				email : true
			},
			'password' : {
				required : true,
			},
			'password_confirm' : {
				required : true,
				equalTo : '#password'
			},
			'mobile' : {
				required : true,
				number : true
			},
			'gender' : 'required'
		},
		submitHandler : function(home) {
			form.submit();
		}
	});
});