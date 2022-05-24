$.ajaxSetup({
    headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
 });
$(document).ready(function(){
    jQuery.validator.addMethod("lettersonly", function(value, element) {
    return this.optional(element) || /^[a-zA-Z'. ]+$/i.test(value);
    }, "*Letters only please");
    });
    $("#form").validate({
        rules:{
            name: {
                required: true,
                lettersonly:true,
            },
            email: {
                required: true,
                email: true,
                remote : {
                    url : "/check-email",
                    type : "post"
                },
            },
            password:{
                required:true
            },
        },messages: {
          name: {
                required: "*Please enter your name",
                email: "*Enter valid email"
            },
            email: {
                required: "*Please enter your email",
                remote: "*Email Already Exists"
            },
            password:{
                required:"*Please enter password",
            },
        },
      submitHandler:function(form){ 
          $.ajax({
              url:'/register-insert',
              type:'post',
              data:jQuery('#form').serialize(form),
              dataType:'json',
              success: function(response){
                  if(response.status == 'successful'){
                      $("#message").html("Registered Successfully!!").addClass("alert alert-success").fadeOut(3000);
                      $("#form")[0].reset();
                  }
              }
          });
      },
    });
    $("#login").validate({
        rules:{
            email: {
                required: true,
                email: true,
            },
            password:{
                required:true
            },
        },messages: {
            email: {
                required: "*Please enter your email",
            },
            password:{
                required:"*Please enter password",
            },
        },
      submitHandler:function(form){ 
          $.ajax({
              url:'/login-successful',
              type:'post',
              data:jQuery('#login').serialize(form),
              dataType:'json',
              success: function(response){
                  if(response.login == 'successful'){
                      $("#error").html("Login Successfully!!").addClass("alert alert-success").fadeOut(3000);
                      window.location.href = '/';
                  }else{
                    $("#error").html("Username or password do not match!!").addClass("alert alert-success").fadeOut(3000);
                  }
              }
          });
      },
    });
  