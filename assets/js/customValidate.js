$(document).ready(function(){



		$('#frm').validate({
	    rules: {

	       username: {
	       	required: true,
	      	minlength: 6
	      },
	      password: {
	      	minlength: 6,
	        required: true
	      }
	    },
			success: function(element) {
				element
				.text('OK!').css('color', 'green').addClass('valid');
			}
	  });

});