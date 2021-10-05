
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css2/style.css'); ?>">

	<title>Login Page</title>

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >

    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" >

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>

			</div>

			<div class="card-body">

        <?php $errormsg=$this->session->userdata('errormsg');
          if(!empty($errormsg)) {  ?>

        <div class="alert alert-danger" role="alert">
          <?php echo $errormsg; ?>
        </div>
      <?php } ?>


				<form action="<?php echo base_url().'login/index'; ?>" id="loginForm" name="loginForm" method="post" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" value="<?php echo set_value('username'); ?>" placeholder="username" id="username" name="username" >

            <div class="input-group">
              <span class="text-warning"><?php echo form_error('username'); ?></span>
            </div>
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" value="<?php echo set_value('username'); ?>"  placeholder="password" name="password"><br>

            <div class="input-group">
              <span class="text-warning"><?php echo form_error('password'); ?></span>
            </div>

					</div>
						<center><input type="submit" value="Login" class="btn login_btn"></center>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
