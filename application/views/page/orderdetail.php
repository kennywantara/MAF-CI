<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $style; ?>
</head>
<body>
	<?php echo $script;?>
<?php echo $header;$title =0;?>

<div class="container">
	<div class="check-sec">
		<div class="row">	 
		<div class="col-md-9">
			<h1>My Shopping Bag </h1>
				
			<?php $total =0;
			foreach ($line as $data) {?>
			<div class="cart-header">
				<div class="cart-sec simpleCart_shelfItem">
					<div class="cart-item cyc">
						<img src="<?php echo base_url().'/'.$data->productpicture;?>" class="img-responsive" alt=""/>
					</div>
					<div class="cart-item-info">
						   	 <!-- id -->
						<form id="form<?php echo $data->productID 	?>"  action="<?php echo site_url() ?>/singleproduct/index" method="post">
						<input type="hidden" name="productID" id="id" value="<?php echo $data->productID ?>" />
							</form>
						<h3><a href="" onclick="document.getElementById('form<?php echo $data->productID ?>').submit();return false;"><?php echo $data->productName;?></a><span><?php echo $data->productCategory?></span></h3>
						<ul class="qty">	
							<li><p>Qty : <?php echo $data->quantity;?> </p></li>
						</ul>
						<div class="delivery">
							 <p>Price : <?php echo $data->price;
									 $total = $total + ($data->price * $data->quantity); ?></p>
							 <div class="clearfix"></div>
						</div>								
					</div>						
				</div>
			</div>
			
		
		
			 <?php }?>   
			<div class="col-md-3 cart-total">
				<ul class="total_price">
				   <li class="last_price"> <h4>TOTAL</h4><span><?php echo $total;?></span></li>	
				   <li class="last_price"></li>			   
				</ul> 
				<div class="clearfix"></div>
				<br><br>
			</div>	 	
			<div class="clearfix"> </div>
			</div>
		</div>
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