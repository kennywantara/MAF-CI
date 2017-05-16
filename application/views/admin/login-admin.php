

<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $style; ?>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <ul class="nav navbar-nav">
    <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>img/logo.png" style="width:120px; padding-top:0px;"></a>	
    </ul>
      
    </div>
	<ul class="nav navbar-nav navbar-right">
      <li class="active" style="float:right;"><a href="#">Logout</a></li>
    </ul>
  </div>
</nav>
<div class="container">
	<div class="row">
		<h2>Login</h2>
		 <div class="col-md-9 log">			 
				 <p>Login Admin</p>
				 <?php echo form_open('signIn/sign_in', 'class="form-horizontal"');?>
		<div class="form-group">
			<label class="control-label col-sm-3" for="username">Email</label>
			<div class="col-sm-8">
				<?php 
					$data = array(
					        'name'          => 'username',
					        'placeholder'	=> 'Email',
					        'required'		=> 'true',
					        'type'			=> 'text',				   
					        'class'     	=> 'text-box'
					); 
					echo form_input($data);
				?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="password">Password</label>
			<div class="col-sm-8">
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
		</div>
	<?php echo form_close(); ?>
		 </div>	
	</div>
</div>

</body>
</html>