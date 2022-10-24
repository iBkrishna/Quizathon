<?php

include('master/Examination.php');

$exam = new Examination;

$exam->user_session_public();

?>

<html lang="en">
<head>
    <title>QUIZATHON</title>
	<link rel="icon" href="logo.opt.png" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/dist/parsley.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style/style.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style>
		.field-icon {
		  float: right;
		  margin-left: -25px;
		  margin-top: -43px;
		  position: relative;
		  z-index: 2;
		}

		.container{
		  padding-top:50px;
		  margin: auto;
		}
	</style>
</head>
<body>
<div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 1rem;">
		<nav class="navbar navbar-expand-sm navbar-dark" style="background: #000000;">
			<a class="navbar-brand" href="index.php">
				<img src="logo.opt.png" width="35" style="margin-left: 5px;" alt="" class="d-inline-block align-middle mr-2">
				<span class="text-uppercase font-weight-bold">QUIZATHON</span>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="feedback.php">Feedback <i class="far fa-comment-alt"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About <i class="fas fa-info-circle"></i></a>
                </li> 
				<li class="nav-item">
					<a class="nav-link" href="FAQs.php">FAQs <i class="fas fa-question"></i></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="support.php">24*7 Help <i class="fas fa-hands-helping"></i></a>
				</li>  
            </ul>
        </div-->  
	</nav>
</div>
<br>
	<div class="containter">
		<div class="d-flex justify-content-center">
			<br /><br />
			<div class="card" style="margin-top:50px;margin-bottom: 100px; border: none; width: 90%;">
        		<div class="card-header"  style="text-align: center;"><h3>REGISTER</h3></div>
        		<div class="card-body">
        			   <span id="message"></span>
                <form method="post" id="user_register_form">
                  <div class="form-group">
                    <input type="text" name="user_email_address" id="user_email_address" placeholder="Enter Email Address" class="form-control" data-parsley-checkemail data-parsley-checkemail-message='Email Address already Exists' />
                  </div>
                  <div class="form-group">
                    <input type="password" name="user_password" id="user_password" maxlength="12" placeholder="Enter Password" class="form-control" />
					          <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="myFunction()"></span>
                  </div>
                  <div class="form-group">
                    <input type="password" name="confirm_user_password" id="confirm_user_password" maxlength="12" placeholder="Confirm Password" class="form-control" />
					          <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password" onclick="myFunction1()"></span>
                  </div>
                  <div class="form-group">
                    <input type="text" name="user_name" id="user_name" placeholder="Enter Name"  class="form-control" /> 
                  </div>
                  <div class="form-group">
                    <select name="user_gender" id="user_gender" placeholder="Enter Password" placeholder="Select Gender"  class="form-control">
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                  </select> 
                  </div>
                  <div class="form-group">
                    <textarea name="user_branch" id="user_branch" placeholder="Enter Branch"  class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="text" name="user_roll_no" id="user_roll_no" placeholder="Enter Roll Number"  class="form-control" /> 
                  </div>
                  <div class="form-group">
                    <label>Select Profile Image</label>
                    <input type="file" name="user_image" id="user_image" />
                  </div>
                  <br />
                  <div class="form-group" align="center">
                    <input type="hidden" name='page' value='register' />
                    <input type="hidden" name="action" value="register" />
                    <input type="submit" name="user_register" id="user_register" style="width: 60%;" class="btn btn-info" value="Register" />
                  </div>
                </form>
          			<div align="center">
          				<a href="login.php" style="text-decoration: none;">Already have an account ? Login</a>
          			</div>
        		</div>
      		</div>
      		<br /><br />
      		<br /><br />
		</div>
	</div>

<script>

function myFunction() {
  var x = document.getElementById("user_password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

function myFunction1() {
  var x = document.getElementById("confirm_user_password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


$(document).ready(function(){

  window.ParsleyValidator.addValidator('checkemail', {
    validateString: function(value){
      return $.ajax({
        url:'user_ajax_action.php',
        method:'post',
        data:{page:'register', action:'check_email', email:value},
        dataType:"json",
        async: false,
        success:function(data)
        {
          return true;
        }
      });
    }
  });

  $('#user_register_form').parsley();

  $('#user_register_form').on('submit', function(event){
    event.preventDefault();

    $('#user_email_address').attr('required', 'required');

    $('#user_email_address').attr('data-parsley-type', 'email');

    $('#user_password').attr('required', 'required');

    $('#confirm_user_password').attr('required', 'required');

    $('#confirm_user_password').attr('data-parsley-equalto', '#user_password');

    $('#user_name').attr('required', 'required');

    $('#user_name').attr('data-parsley-pattern', '^[a-zA-Z ]+$');

    $('#user_branch').attr('required', 'required');

    $('#user_roll_no').attr('required', 'required');

    $('#user_roll_no').attr('data-parsley-pattern', '^[0-9]+$');

    $('#user_image').attr('required', 'required');

    $('#user_image').attr('accept', 'image/*');

    if($('#user_register_form').parsley().validate())
    {
      $.ajax({
        url:'user_ajax_action.php',
        method:"POST",
        data:new FormData(this),
        dataType:"json",
        contentType:false,
        cache:false,
        processData:false,
        beforeSend:function()
        {
          $('#user_register').attr('disabled', 'disabled');
          $('#user_register').val('please wait...');
        },
        success:function(data)
        {
          if(data.success)
          {
            $('#message').html('<div class="alert alert-success">Please check your email</div>');
            $('#user_register_form')[0].reset();
            $('#user_register_form').parsley().reset();
          }

          $('#user_register').attr('disabled', false);

          $('#user_register').val('Register');
        }
      })
    }

  });
	
});

</script><br>

<footer class="page-footer font-small special-color-dark pt-4 container-fluid text-center">

  <div class="container">

    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fab fa-facebook-f"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="facebook.com" class="btn-floating btn-tw mx-1">
          <i class="fab fa-twitter"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="http://www.googleplus.com" class="btn-floating btn-gplus mx-1">
          <i class="fab fa-google-plus-g"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="http://www.linkedin.com" class="btn-floating btn-li mx-1">
          <i class="fab fa-linkedin-in"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a href="http://www.twitter.com" class="btn-floating btn-dribbble mx-1">
          <i class="fab fa-dribbble"> </i>
        </a>
      </li>
    </ul>
   
  </div>

  <div class="footer-copyright text-center py-1">© 2020 Copyright:
    <a href="https://mdbootstrap.com/">Quizathon</a>
  </div>

</footer>

</body>
</html>