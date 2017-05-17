<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $style; ?>
</head>
<body>
	<?php echo $script;?>
<?php echo $header; $i=0; $total = 0;
 ?>

<div class="container">
	<?php if (isset($login)){
			echo ' <div class="alert alert-danger"><button class="close" data-dismiss="alert"></button>' ;
			echo $login;
			echo '</div>';
	}
	if(validation_errors()){
	   echo ' <div class="alert alert-danger"><button class="close" data-dismiss="alert"></button> ' ;
    echo validation_errors();
    echo '</div>';    }
	?>
	<div class="check-sec">	 

		<div class="col-md-9 cart-items">
			<h1>My Shopping Bag </h1>
				

			<?php 

			

			foreach ($cart as $data) {$i++;?>
			<div class="cart-header<?php echo $data['rowid']; ?>">
				<div class="close" id="<?php echo $data['id']; ?>">X</div>
				<div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							<img src="<?php echo base_url().'/'.$data['picture'];?>" class="img-responsive" alt=""/>
						</div>
					   <div class="cart-item-info">
					   	 <!-- id -->
					   		<form id="form<?php echo $data['id']?>"  action="<?php echo site_url() ?>/singleproduct/index" method="post">
							<input type="hidden" name="productID" id="id" value="<?php echo $data['id'] ?>" />
							</form>
						    <h3><a href="" onclick="document.getElementById('form<?php echo $data['id']?>').submit();return false;"><?php echo $data['name'];?></a><span>Model No: RL-5511S</span></h3>
							<ul class="qty">
								
								<li><p>Qty : <?php echo $data['qty'];?> </p></li>
							</ul>
							<div class="delivery">
								 <p>Price : <?php echo $data['price'];
								 $total += $data['subtotal']; ?></p>
								 <div class="clearfix"></div>
							</div>								
					   </div>
					   
											
				  </div>
			 </div>
			 <script>$(document).ready(function(c) {
					$('#<?php echo $data['id']; ?>').on('click', function(c){
						$('.cart-header<?php echo $data['rowid']; ?>').fadeOut('slow', function(c){
							$('.cart-header<?php echo $data['rowid']; ?>').remove();
						});
						});	  
					});
			   </script>
			 <?php } if (!empty($cart)){  
			 	$attributes = array('id' => 'form-id');
			 	 echo form_open('products/payment',$attributes);?>
			 	 <input type="hidden" name="total" value="<?php echo $total;?>">
				<div class="form-group">
							<label class="control-label col-sm-3">Notes</label>
							<textarea name="notes" required cols="50" rows="5"></textarea>
						</div>
					   	<div class="form-group">
							<label class="control-label col-sm-3">Delivery Address</label>
							<textarea name="deliveryAddress" required cols="50" rows="5"></textarea>
						</div>
					   <div class="clearfix"></div>
			<?php }?>
			
		</div>
				<div class="col-md-3 cart-total">
			<a class="continue" href="<?php echo site_url('products/index');?>">Continue shopping</a>
				
			<ul class="total_price">
			   <li class="last_price"> <h4>TOTAL</h4></li>	
			   <li class="last_price"><span><?php echo $total;?></span></li>			   
			</ul> 
			<div class="clearfix"></div>
			<div class="clearfix"></div>
			<a onclick="document.getElementById('form-id').submit();return false;" class="order" href="">Proceed to Payment</a>
			<?php echo form_close() ?>
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