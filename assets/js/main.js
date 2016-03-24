$(document).ready(function(){       
    
	$("#navigation").treeview({
		persist: "location",
		collapsed: true,
		expandable: true,
		unique: true
	});
	
	$('.gridly').gridly({
		base: 60,  
		gutter: 20, 
		columns: 12
    	});
	
	$('#dateb').datepick({dateFormat: 'mm-dd-yyyy'});
	 
	jQuery.validator.addMethod("login_format", function(value, element) {
		  return this.optional(element) || /^\w*$/.test( value );
		}, 'Please use for login only [a-zA-Z0-9]');
		
	jQuery.validator.addMethod("password_format", function(value, element) {		
		  return this.optional(element) || /^[a-zA-Z0-9_№\?&\!]*$/.test( value );
		}, 'Please use for password only [a-zA-Z0-9_№?&!]');
		
	$("#form").validate({
		success: function(label) { label.addClass("valid").text("Ok!") },
		submitHandler: function() { alert("Submitted!") },
        rules:{
            login:{
                required: true,
				login_format: true,
                minlength: 4,
                maxlength: 16,
            },
            password:{
                required: true,
				password_format: true,
                minlength: 6,
                maxlength: 16,
            },			
			password1:{  
				required: true,
                equalTo: '#first_10',          
            },			
			email:{
                required: true,
                email: true,
            },			
			dob:{
                required: true,
                date: true,
            },
       },
       messages:{
            login:{
                required: "Login is required",
                minlength: "Login has to be at least 4 symbols",
                maxlength: "Max length of the Login field is 16 symbols",
            },
            password:{
                required: "Password is required",
                minlength: "Password has to be at least 6 symbols",
                maxlength: "Max length of the Password field is 16 symbols",
            },			
			password1:{
				required: "Password confirmation is required",
                equalTo: "Password confirmation is not correct",        
            },			
			email:{
                required: "Email is required",
                email: "Email must be in the format of name@domain.com",       
            },			
			dob:{
                required: "Date of birth is required",
                date: "Incorrect Date format - 12/31/2000",          
            },			
       }
    });
});

