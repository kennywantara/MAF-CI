<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $style; ?>
</head>
<body>
<?php echo $header; ?>
<div class="contact">
	  <div class="container">
		 
			<!--start contact-->
			<h3 style="padding:20px;">Contact Us</h3>
		  <div class="section group">				
				<div class="col-md-6 span_1_of_3">
      			<div class="company_address">
				     	<h4>Store Information :</h4>
						    	<p>Kalideres</p>
						   		<p>Jakarta</p>
						<p>Whatsapp: 0812 1212 5052 / 0812 1849 5209</p>   		
				   		<p>LINE: <a href="https://line.me/R/ti/p/%40hwr2024b">@hwr2024b</a></p>
				   		<p>Follow on: <a href="https://www.instagram.com/madame.antoine.florist/">Instagram</a></p>
				   </div>
				</div>				
				<div class="col-md-6 span_2_of_3">
				  <div class="contact-form">
					    <?php echo form_open('contact/send_email');?>
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span>
						    		<?php 
										$data = array(
										        'name'          => 'userName',				   
										        'class'     	=> 'textbox'
										); echo form_input($data);
									?>
							</span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><?php 
										$data = array(
										        'name'          => 'userEmail',				   
										        'class'     	=> 'textbox'
										); echo form_input($data);
									?>
								</span>
						    </div>
						    <div>
						    	<span><label>MESSAGE</label></span>
						    	<span><?php 
										$data = array(
										        'name'          => 'userEmail'
										); echo form_textarea($data);
									?> 
								</span>
						    </div>
						   <div>
						   		<button type="submit" class="buttonM" style="margin-left:0px; width:98%;" value="Submit" name="contactus" data-target="#modalThankyou" data-toggle="modal">Submit</button>
						  </div>
					    <?php echo form_close(); ?>
					    	

				    </div>
  				</div>				
		  </div>
	  </div>
 </div>
 </div>
 <?php echo $script; ?>
<?php echo $footer; ?>
</body>
</html>