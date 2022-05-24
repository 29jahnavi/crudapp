
    $("#yourform").validate({
        rules:{
            fname: {
                required: true,
            },
            lname: {
                required: true,
            },
            email:{
                required:true,
                email: true
            },
        },messages: {
          fname: {
                required: "*Please enter first name"
            },
            lname: {
                required: "*Please enter last name"
            },
            email:{
                required:"*Please enter email",
            },
        },
      submitHandler:function(form){ 
          var formData = new FormData(form);
          $.ajax({
              url:'/form-insert',
              type:'POST',
              data: formData,
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
              cache:false,
              contentType: false,
              processData: false,
              dataType:'json',
              success: function(response){
                  if(response.status == 'success'){
                      $("#err_msg").html("Form Successfully Submitted.").addClass("alert alert-success");
                      $("#confirm").hide(true);
                    //   $("#confirm").prop('disabled', true);
                      $("#yourform")[0].reset();
                      window.location.href="/form";
                  }
              }
          });
      },
    });
  
    $("#yourform2").validate({
        rules:{
            fname: {
                required: true,
            },
            lname: {
                required: true,
            },
            email:{
                required:true,
            },
        },messages: {
          fname: {
                required: "*Please enter first name"
            },
            lname: {
                required: "*Please enter last name"
            },
            email:{
                required:"*Please enter email",
            },
        },
      submitHandler:function(form){ 
          var formData = new FormData(form);
          $.ajax({
              url:'form2',
              type:'POST',
              data: formData,
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
              cache:false,
              contentType: false,
              processData: false,
              dataType:'json',
              success: function(response){
                  if(response.status == 'success'){
                      $("#err_msg").html("Form Successfully Submitted.").addClass("alert alert-success").fadeOut(3000);
                      $("#yourform2")[0].reset();
                  }
              }
          });
      },
    });
    $("#addpost").validate({
        rules:{
            post: {
                required: true,
            },
        },messages: {
            post: {
                required: "*Please write some post here"
            },
        },
      submitHandler:function(form){ 
          var formData = new FormData(form);
          $.ajax({
              url:'/addpost-insert',
              type:'POST',
              data: formData,
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
              cache:false,
              contentType: false,
              processData: false,
              dataType:'json',
              success: function(response){
                  if(response.status == 'success'){
                      $("#err_msg").html("Post Successfully Submitted.").addClass("alert alert-success").fadeOut(3000);
                      $("#addpost")[0].reset();
                  }
              }
          });
      },
    });

    jQuery.validator.addMethod("lettersonly", function(value, element){
        return this.optional(element) || /^[a-z]+$/i.test(value);
        }, "*Letters only please"); 
    
    $("#category").validate({
        rules:{
            categoryname: {
                required: true,
                lettersonly: true
            },
            displayorder: {
                required: true,
                number: true
            },
        },messages: {
            categoryname: {
                required: "*Please enter category name",
            },
            displayorder: {
                required: "*Please enter number of orders",
                number: "*Please enter only numbers"
            },
        },
      submitHandler:function(form){ 
          var formData = new FormData(form);
          $.ajax({
              url:'/category-insert',
              type:'POST',
              data: formData,
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
              cache:false,
              contentType: false,
              processData: false,
              dataType:'json',
              success: function(response){
                if(response.status == 'success'){
                $("#error").html("Category details Successfully Submitted.").addClass("alert alert-success").fadeOut(3000);
                $("#category")[0].reset();
                }
              }
          });
      },
    });
    jQuery.validator.addMethod("lettersonly", function(value, element){
    return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "*Letters only please"); 

    $("#subcategory").validate({
        rules:{
            categoryname: {
                required: true,
            },
            subcategoryname: {
                required: true,
                lettersonly: true
            },
            displayorder: {
                required: true,
                number: true
            },
        },messages: {
            categoryname: {
                required: "*Please enter category name"
            },
            subcategoryname: {
                required: "*Please enter sub category name"
            },
            displayorder: {
                required: "*Please enter number of orders",
                number: "*Please enter only numbers"
            },
        },
      submitHandler:function(form){ 
          var formData = new FormData(form);
          $.ajax({
              url:'/subcategory-insert',
              type:'POST',
              data: formData,
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
              cache:false,
              contentType: false,
              processData: false,
              dataType:'json',
              success: function(response){
                if(response.status == 'success'){
                $("#error").html("Sub Category details Successfully Submitted.").addClass("alert alert-success").fadeOut(3000);
                $("#subcategory")[0].reset();
                }
              }
          });
      },
    });