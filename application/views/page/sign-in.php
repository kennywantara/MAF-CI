<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $style; ?>
</head>
<body>
<?php echo $header; ?>

<div class="container"></div>
<div class="login_sec">
	 <div class="container" style="padding:64px;">
		 <h2>Login</h2>
		 <div class="col-md-6 log">			 
				 <p>Welcome to Madame Antoine Florist</p>
				 <?php echo form_open('signIn/sign_in', 'class="form-horizontal"');?>
		<div class="form-group">
			<label class="control-label col-sm-3" for="username">Username</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'username',
					        'placeholder'	=> 'Username',
					        'required'		=> 'true',				   
					        'class'     	=> 'text-box'
					); 
					echo form_input($data);
				?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="password">Password</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'password',
					        'placeholder'	=> 'Password',
					        'required'		=> 'true',				   
					        'class'     	=> 'text-box'
					); 
					echo form_password($data);
				?>

			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3"></label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'signin',
					        'value'			=> 'Sign In',					 			   
					        'class'     	=> 'text-box'
					);
					echo form_submit($data); 
					/*$data = array(
							'name'          => 'signup',
					        'value'			=> 'Create an Account',					 			   
					        'class'     	=> 'a',
					        'style'			=> 'background-color:none;'
						);
					echo form_submit($data);*/

					?>
					

					

			</div>
				<a href="">Forgot your password</a>
		</div>
	<?php echo form_close(); ?>
		 </div>	
				
		 <div class="clearfix"></div>
	 </div>
</div>
<?php echo $script; ?>
<?php echo $footer; ?>
</body>
</html>