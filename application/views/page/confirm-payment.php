<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $style; ?>
</head>
<body>
	<?php echo $script;?>
	<?php echo $header;
 ?>
	 <div class="container contact" style="padding:64px;">
		 <h3>Payment Confirmation</h3>
		 <div class="col-md-6 log">			 
				 <?php echo form_open_multipart('products/confirmYourPayment', 'class="form-horizontal"');?>
		<div class="form-group">
			<label class="control-label col-sm-3" for="username">Order ID</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'order',				   
					        'class'     	=> 'text-box',
					        'type' 			=> 'number',
					        'style'			=> 'width:90%',
					        'value'			=> $order,
					        'readonly'		=> 'TRUE'
					); 
					echo form_input($data);
				?>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="tulip">Select Your Bank</label>
			<div class="col-sm-9 text-box">

				<?php 
					
				$options = array(
				        'bri'         => 'BRI',
				        'bca'           => 'BCA',
				        'mandiri'         => 'Bank Mandiri',
				        'other'        => 'Other',
				);

				$bank_option = array('bri', 'Other');
				echo form_dropdown('bank', $options, 'Choose your bank');

					
				?>

			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="Fererro">Transfer Method</label>
			<div class="col-sm-9">
				<?php 
				$options = array(
				        'atm'         => 'ATM',
				        'ebank'           => 'E-Banking',
				        'counterBank'         => 'Counter Bank',
				        'mBanking'        => 'm-Banking',
				);

				echo form_dropdown('transfermethod', $options, 'other');
				?>

			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="tulip">Name</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'name',		   
					        'class'     	=> 'text-box col-sm-1',
					        'type' 			=> 'text'
					); 
					echo form_input($data);
				?>

			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="tulip">Date</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'date',
					        'class'     	=> 'text-box col-sm-1',
					        'type' 			=> 'date'
					); 

					echo form_input($data);

				?>

			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="tulip">Amount Transfer</label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'amountTransfer',		   
					        'class'     	=> 'text-box',
					        'type' 			=> 'number',
					        'style'			=> 'border: 1px solid #D6D6D6; width:90%;'
					); 
					echo form_input($data);
				?>

			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3" for="tulip">Upload Transfer Receipt</label>
			<div class="col-sm-9">
				<input type="file" name="struk" size="20" />

			</div>
		</div>
		<div class="form-group">
			<label class="control-label col-sm-3"></label>
			<div class="col-sm-9">
				<?php 
					$data = array(
					        'name'          => 'confirmPayment',
					        'value'			=> 'Confirm Payment',					 			   
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