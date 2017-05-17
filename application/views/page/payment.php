<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $style; ?>
</head>
<body>
	<?php echo $script;?>
	<?php echo $header;
 ?>
<div class="container contact" style="text-align:center; padding-top:25px;" >
	<div class="col-md-4 col-md-offset-4" style="border:2px solid #FFD700; padding:32px;">
		<h3>Order Success!</h3>
		<br>
		<h4>Your Order ID is: <?php echo $orderID;?></h4>
		<h4>Please make a payment to BCA: 7570524008 Nathania Elvina,<br> then confirm your payment <a href="<?php echo site_url('products/confirmpayment/'.$orderID)?>">here</a></h4><br>
		<h4>We will process your order once we've confirmed you payment. <br>Thank you for shopping with us</h4>
		<br><br><br>
		<h5>Madame Antoine Florist - Fine Flower for Your Dearest One</h5>		
	</div>
</div>
<div class="clearfix"> </div>

<?php echo $footer; ?>
</body>
</html>