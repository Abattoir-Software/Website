var isRecaptchaValidated = false;
var recaptchaResponse = "";
var messageSent = false;

function messageSentSuccessfully() {
	messageSent = true;
	$("#submit").css("display","none");
	$("#recaptchaArea").css("display","none");
	$("#contact :input").prop("disabled", true);
	$("#noticeArea").html('<div class="alert alert-success"><strong>Success!</strong> Thank you for sending your message. Please allow 24 - 72 hours for a response.</div>');
}

function recaptchaMessage(message) {
	$("#submit").css("display","none");
	$("#submit").prop("disabled","");
	$("#noticeArea").html('<div class="alert alert-danger alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong> *** WARNING: </strong> ' + message + ' <strong> ***</strong></div>');
}

function checkRecaptchaResults() {
	recaptchaResponse = grecaptcha.getResponse();
	$("#submit").prop("disabled","");
	if(recaptchaResponse.length==0) {
		isRecaptchaValidated = false;
		$("#submit").css("display","none");
	} else {
		isRecaptchaValidated = true;
		$("#submit").css("display","inherit");
		$("#noticeArea").empty();
	}
}

function recaptchaExpired() {
	recaptchaResponse = grecaptcha.getResponse(); // Should be empty
	isRecaptchaValidated = false;
	if(messageSent==false) {
		recaptchaMessage("The reCAPTCHA has expired! You need to revalidate that you are not a robot!");
	}
}

$(document).ready(function() {
	$('#contact').bootstrapValidator({
		submitHandler: function(validator, form, submitButton) {

			$.ajax({
				type: "POST",
				url: form.attr("action"),
				data: {
					name: form.find('[name="name"]').val(),
					email: form.find('[name="email"]').val(),
					phone: form.find('[name="phone"]').val(),
					company: form.find('[name="company"]').val(),
					message: form.find('[name="message"]').val(),
					"g-recaptcha-response": recaptchaResponse
				}
			}).success(function(response) {
				if(response=="PASSED") {
					messageSentSuccessfully();
				} else if(response=="RECAPTCHA FAILED") {
					recaptchaMessage("The reCAPTCHA response was invalid. Please try again!");
				}
				console.log(response);
			}).done(function*(response) {
				alert("DONE...");
				console.log(response);
			}).fail(function(data) {
				alert("FAIL...");
				if(data.responseText!=="") {
					console.log(data.responseText);
				} else {
					console.log("*** ERROR ***");
				}
			});
		},
	    feedbackIcons: {
	        valid: 'glyphicon glyphicon-ok',
	        invalid: 'glyphicon glyphicon-exclamation-sign',
	        validating: 'glyphicon glyphicon-refresh'
	    },
	    fields: {
	        name: {
	            validators: {
	                stringLength: { min: 2, },
	                notEmpty: { message: 'Please supply your name' }
	            }
	        },
	        lastname: {
	            validators: {
	                stringLength: { min: 2, },
	                notEmpty: { message: 'Please supply your last name' }
	            }
	        },
	        email: {
	            validators: {
	                notEmpty: { message: 'Please supply your email address' },
	                emailAddress: { message: 'Please supply a valid email address' }
	            }
	        },
	        companyName: {
	            validators: {
	                stringLength: { min: 0, },
	                notEmpty: { message: '' }
	            }
	        },
	        phone: {
	            validators: {
	                stringLength: { min: 0, },
	                notEmpty: { message: '' }
	            }
	        },
	        message: {
	            validators: {
	                stringLength: {
	                    min: 10,
	                    message:'Please enter at least 10 characters message'
	                },
	                notEmpty: { message: 'Please supply a message' }
	            }
	        }
	    }
	});
});
