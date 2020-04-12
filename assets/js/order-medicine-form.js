$(document).ready(function () {
	$('form[id = "orderMedicineForm"]').validate({
		rules : {
			'customer_name' : {
				required : true,
				minlength : 2,
				maxlength : 20
			},
			'userContact' : {
				required : true,
				number : true
			},
			'customer_address' : {
				required : true,
				minlength : 2,
			},
			'medicines' : 'required',
			'order_store' : 'required'
		},
		submitHandler : function(home) {
			form.submit();
		}
	});
});