$(document).ready(function () {
	$('form[id = "edit-profile-form"]').validate({
		rules : {
			'name' : {
				required : true,
				minlength : 2,
				maxlength : 20
			},
			'mobile' : {
				required : true,
				number : true
			},
			'gender' : 'required',
			'address' : 'required'
		},
		submitHandler : function(home) {
			form.submit();
		}
	});
});