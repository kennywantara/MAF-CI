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
    //error dari username/password nya salah
    else if(isset($error_message)) {
    	echo ' <div class="alert alert-danger"><button class="close" data-dismiss="alert"></button>';
    echo $error_message;
    echo '</div>';   
    } 
    else if(isset($fail)){
    	echo ' <div class="alert alert-danger"><button class="close" data-dismiss="alert"></button>';
    echo $fail;
    echo '</div>'; 
    } ?> 
	 <div class="container" style="padding:64px;">
		 <h2>Forgot Your Password</h2>
		 <div class="col-md-9 log">			 
				 <p>Welcome to Madame Antoine Florist</p>
				 <?php echo form_open('SignUp/forgot_your_password', 'class="form-horizontal"');?>
		<div class="form-group">
			<label class="control-label col-sm-3" for="username">Please enter your email account</label>
			<br>
			<div class="col-sm-8">
				<?php 
					$data = array(
					        'name'          => 'email',
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
			<label class="control-label col-sm-3 col-sm-offset-3"></label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'submit',
					        'value'			=> 'Submit',					 			   
					        'class'     	=> 'text-box btn btn-danger'
					);
					echo form_submit($data); 
				
					?>									
					

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