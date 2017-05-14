<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $style; ?>
</head>
<body>
<?php echo $header; ?>


	 <div class="container" style="padding:64px;">
		 <h2>Custom Order</h2>
		 <div class="col-md-6 log">			 
				 <p>Only available for Hand Bouquet Flowers</p>
				 <?php echo form_open('signIn/sign_in', 'class="form-horizontal"');?>
		<div class="form-group">
			<label class="control-label col-sm-3" for="username">Rose</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'Rose',
					        'placeholder'	=> 'Username',
					        'required'		=> 'true',				   
					        'class'     	=> 'text-box',
					        'type' 			=> 'number'
					); 
					echo form_input($data);
				?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="tulip">Tulip</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'password',
					        'required'		=> 'true',				   
					        'class'     	=> 'text-box',
					        'type' 			=> 'number'
					); 
					echo form_input($data);
				?>

			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="Fererro">Chocolate</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'password',
					        'required'		=> 'true',				   
					        'class'     	=> 'text-box',
					        'type' 			=> 'number'
					); 
					echo form_input($data);
				?>

			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="tulip">Teddy Bear</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'bear',
					        'required'		=> 'true',				   
					        'class'     	=> 'text-box',
					        'type' 			=> 'number'
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
					        'name'          => 'addToCart',
					        'value'			=> 'Add to Cart',					 			   
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
				
		 <div class="clearfix"></div>
	 </div>
</div>
<?php echo $script; ?>
<?php echo $footer; ?>
</body>
</html>