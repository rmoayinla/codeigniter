(function($){
	
	$(function(){
		
		var signupFormValidate = $("#signup-form").validate({
	      	rules: {
	      		client_fullname: {
	      			required: true,
	      		},
	      		client_username:{
	      			required: true,
	      			pattern: /^([a-zA-Z0-9])+$/,
	      		},
	      		client_email: {
	      			required: true,
	      			email: true,
	      		}
	      	},
	      	messages:{
	      		client_fullname: "Enter your full name please", 
	      		client_username: {
	      			required: "Username is required for accessing the dashboard",
	      			pattern: "Invalid characters, only Alphabets and Numbers are allowed"
	      		},
	      		client_email: {
	      			required: "Please enter your email address",
	      			email: "Invalid email, please retype your email address"
	      		}
	      	},
	      	errorElement: "span",
		});

		$("#signup-form .next-button").on("click", function(ev){
			ev.preventDefault();
			if(!signupFormValidate.form())return false;
			
			var _this, prevParent,nextParent;
			_this = $(this);
			stepParent = _this.parents(".form-step");
			nextParent = stepParent.next(".form-step");
			setTimeout( function(){nextParent.addClass("slide-in").removeClass("slide-out fade-out");}, 800);
			stepParent.removeClass("slide-in").addClass("slide-out fade-out");
			
			
		});

		$("#signup-form .prev-button").on("click", function(ev){
			ev.preventDefault();
			if(!signupFormValidate.form())return false;
			var _this, prevParent,nextParent, stepParent;
			_this = $(this);
			stepParent = _this.parents(".form-step");
			prevParent = stepParent.prev(".form-step");
			setTimeout( function(){prevParent.addClass("slide-in").removeClass("slide-out fade-out");}, 800);
			stepParent.removeClass("slide-in").addClass("slide-out fade-out");
			
		});

		$("#signup-form .preview-button").on("click", function(ev){
			ev.preventDefault();
			var _this, prevParent,nextParent, stepParent, html;
			_this = $(this);
			stepParent = _this.parents(".form-step");
			nextParent = stepParent.next(".form-step");
			html = "<table>";
			$.each($('#signup-form').serializeArray(), function(i, field) {
			    html += "<tr><td>" + field.name + "</td><td>" + field.value + "</td></tr>";
			});
			html += "</table>";
			setTimeout( function(){nextParent.addClass("slide-in").removeClass("slide-out fade-out");}, 800);
			stepParent.removeClass("slide-in").addClass("slide-out fade-out");
			nextParent.find(".form-preview").html(html);
			
		});
	});
	

})(jQuery);