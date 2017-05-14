<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $style; ?>
</head>
<body>
	<?php echo $script;?>
<?php echo $header; $i=0; $total = 0;
 foreach ($cart as  $value) {
 	$total += $value['subtotal'];
 }

 ?>

<div class="container">
	<div class="check-sec">	 
		<div class="col-md-3 cart-total">
			<a class="continue" href="">Continue to basket</a>
			<div class="price-details">
				<h3>Price Details</h3>
				<span>Total</span>
				<span class="total1">6200.00</span>
				<span>Discount</span>
				<span class="total1">10%(Festival Offer)</span>
				<span>Delivery Charges</span>
				<span class="total1">150.00</span>
				<div class="clearfix"></div>				 
			</div>	
			<ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span><?php echo $total;?></span></li>			   
			</ul> 
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<a class="order" href="#">Place Order</a>
			<div class="total-item">
				<h3>OPTIONS</h3>
				<h4>COUPONS</h4>
				<a class="cpns" href="#">Apply Coupons</a>
			</div>
		</div>
		<div class="col-md-9 cart-items">
			<h1>My Shopping Bag </h1>
				
			<?php foreach ($cart as $data) {
				
				$i++;
                     ?>
			<div class="cart-header<?php echo $data['id']; ?>">
				<div class="close<?php echo $data['id']; ?>">  </div>
				<div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							<img src="<?php echo base_url().'/'.$data['picture'];?>" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
					   	 <!-- id -->
					   		<form name="myform" id="myform" action="<?php echo site_url() ?>/singleproduct/index" method="post">
							<input type="hidden" name="productID" id="id" value="<?php echo $data['id'] ?>" />
							</form>
						    <h3><a href="" onclick="document.getElementById('myform').submit();return false;"><?php echo $data['name'];?></a><span>Model No: RL-5511S</span></h3>
							<ul class="qty">
								
								<li><p>Qty : <?php echo $data['qty'];?> </p></li>
							</ul>
							<div class="delivery">
								 <p>Price : <?php echo $data['price'];
								 $total += $data['subtotal']; ?></p>
								 <div class="clearfix"></div>
							</div>								
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
			 <script>$(document).ready(function(c) {
					$('.close<?php echo $data['id']; ?>').on('click', function(c){
						$('.cart-header<?php echo $data['id']; ?>').fadeOut('slow', function(c){
							$('.cart-header<?php echo $data['id']; ?>').remove();
						});
						});	  
					});
			   </script>
			 <?php } ?>
			
		</div>
		<div class="clearfix"> </div>
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