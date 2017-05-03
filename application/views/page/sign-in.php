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
				 <form>
					 <h5>Username</h5>	
					 <input type="text" value="" name="username">
					 <h5>Password</h5>
					 <input type="password" value="" name="password">					
					 <input type="submit" value="Login">	
						<a class="acount-btn" href="account.php">Create an Account</a>
				 </form>
				 <!-- <a href="#">Forgot Password ?</a> -->
				
				 <?php echo form_open('AddProduct/add', 'class="form-horizontal"');?>
		<div class="form-group">
			<label class="control-label col-sm-3" for="username">Username</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'username',
					        'placeholder'	=> 'Username',
					        'required'		=> 'true',				   
					        'class'     	=> 'form-control'
					); 
					echo form_password($data);
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
					        'class'     	=> 'form-control'
					); 
					echo form_input($data);
				?>

			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3"></label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'submit',
					        'value'			=> 'Submit',					 			   
					        'class'     	=> 'btn btn-primary'
					);
					echo form_submit($data); ?>
					<a href="<?php echo base_url();?>index.php/Products/index"><input type="button" name="cancel" value="Cancel" class="btn btn-danger"></a> 
			</div>
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