<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url()?>assets/images/favicon/favicon.ico" type="image/x-icon">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Admin Login</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php $attributes = array('class' => 'was-validated', 'id' => 'login_admin');?>
				<?php echo form_open('login_admin', $attributes);?>
				<h2 class="text-center  mb-4">Admin Login</h2>
				<div class="row">
					<div class="col-md-6 mx-auto">

						<!-- form card login -->
						<div class="card rounded-0">
							<div class="card-header">
								<h3 class="mb-0">Login</h3>
							</div>
							<div class="card-body">
								<form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
									<div class="form-group">
										<label for="username">Username</label>
										<input type="text" class="form-control form-control-lg rounded-0" name="username" id="uname1" required="">
										<div class="invalid-feedback">Oops, you missed this one.</div>
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control form-control-lg rounded-0" id="pwd1" required="" autocomplete="new-password">
										<div class="invalid-feedback">Enter your password too!</div>
									</div>
									<div>
										<label class="custom-control custom-checkbox">
											<input type="checkbox" class="custom-control-input">
											<span class="custom-control-indicator"></span>
										</label>
									</div>
									<button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script>
		$("#btnLogin").click(function(event) {

    //Fetch form to apply custom Bootstrap validation
    var form = $("#formLogin")

    if (form[0].checkValidity() === false) {
    	event.preventDefault()
    	event.stopPropagation()
    }

    form.addClass('was-validated');
});
</script>
</body>
</html>