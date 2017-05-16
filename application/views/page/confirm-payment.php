<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $style; ?>
</head>
<body>
	<?php echo $script;?>
	<?php echo $header;
 ?>
	 <div class="container" style="padding:64px;">
		 <h2>Payment Confirmation</h2>
		 <div class="col-md-6 log">			 
				 <?php echo form_open('signIn/sign_in', 'class="form-horizontal"');?>
		<div class="form-group">
			<label class="control-label col-sm-3" for="username">Rose</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'Rose',				   
					        'class'     	=> 'text-box col-sm-1',
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
					        'name'          => 'Tulip',
					        'class'			=> 'text-box col-sm-1',	   
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
					        'name'          => 'Chocolate',		   
					        'class'     	=> 'text-box col-sm-1',
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
					        'class'     	=> 'text-box col-sm-1',
					        'type' 			=> 'number'
					); 
					echo form_input($data);
				?>

			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="tulip">Notes</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'bear',		   
					        'class'     	=> 'text-box col-sm-9',
					        'type' 			=> 'text',
					        'cols'			=> '8',
					        'rows'			=> '4',
					        'style'			=> 'border: 1px solid #D6D6D6'
					); 
					echo form_textarea($data);
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
	
<script type="text/javascript">
function getdetails(id){

$.ajax({
                    type: "POST",
                    url: "<?php echo site_url('singleproduct/index');?>",
                    data: "productID="+id,
                    success: function (response) {
        }
                    
                });
}
</script>
<?php echo $footer; ?>
</body>
</html>