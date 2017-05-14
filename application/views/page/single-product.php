<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $style; ?>
</head>
<body>
	<?php echo $header; ?>

	<?php echo $script; ?>
		<div class="container" style="padding:32px;">
			<div class='row'>
				<div class='col-md-4 col-md-offset-1'>
					<?php echo "<img rel='".$line->productPicture."'' id='picture".$line->productID."'' src='".base_url()."".$line->productPicture."' style='max-width:300px;'/>";?>
				</div>
				<div class="col-md-5">
					<div class="single-para">
						<div class="arrival-info">
						    <?php echo"<h4 id='name".$line->productID."'' rel='".$line->productName."''>".$line->productName."</h4>
						    <p>".$line->productCategory."</p>
						    <h5 id='price".$line->productID."' rel='".$line->productPrice."'>".$line->productPrice."</h5>
						    <p>".$line->productDescription."</p> 
						    <button onclick='javascript:addtocart(".$line->productID.")'class='btn btn-danger'>Add to Cart</button>";
						    ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php echo $footer; ?>
<script type="text/javascript">
   function addtocart(p_id)
    {
    	var id = p_id;
        var price = $('#price00'+p_id).attr('rel');
        var picture = $('#picture00'+p_id).attr('rel');
        var name  = $('#name00'+p_id).attr('rel');

        console.log(price);
        console.log(picture);
        console.log(name);

            $.ajax({
                    type: "POST",
                    url: "<?php echo site_url('products/add');?>",
                    data: "id=00"+id+"&picture="+picture+"&name="+name+"&price="+price,
                    success: function (response) {
                      window.location.href = '<?php echo site_url('products/checkout');?>'
                    }
                });
    }
</script>
	
</body>
</html>
