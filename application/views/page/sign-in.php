<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $style; ?>
</head>
<body>
<?php echo $header; ?>

<div class="container"></div>
<div class="login_sec">
	<?php
	if(validation_errors()){
	   echo ' <div class="alert alert-danger"><button class="close" data-dismiss="alert"></button><b>You\'ve made some errors! Please check them below: <br></b>' ;
    echo validation_errors();
    echo '</div>';      }
    if($this->session->flashdata('needlogin')){
    	echo ' <div class="alert alert-info"><button class="close" data-dismiss="alert"></button>' ;
    echo $this->session->flashdata('needlogin');
    echo '</div>';      }
    
    //error dari username/password nya salah
    else if(isset($error_message)) {
    	echo ' <div class="alert alert-danger"><button class="close" data-dismiss="alert"></button>';
    echo $error_message;
    echo '</div>';   
    } 
    else if($this->session->flashdata('fail')){
    	echo ' <div class="alert alert-success"><button class="close" data-dismiss="alert"></button>';
    echo $this->session->flashdata('fail');
    echo '</div>'; 
    } 
    else if($this->session->flashdata('salah')){
    	echo ' <div class="alert alert-success"><button class="close" data-dismiss="alert"></button>';
    echo $this->session->flashdata('salah');
    echo '</div>'; 
    } ?> 
	 <div class="container" style="padding:64px;">
		 <h2>Login</h2>
		 <div class="col-md-9 log">			 
				 <p>Welcome to Madame Antoine Florist</p>
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
					<a class="acount-btn" href="<?php echo site_url("SignUp/index"); ?>">Create an Account</a>
					
				<a href="<?php echo site_url("SignUp/forgot_index"); ?>" class="col-sm-12">Forgot your password</a>

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