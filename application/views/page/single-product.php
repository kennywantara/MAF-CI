<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $style; ?>
</head>
<body>
	<?php echo $header; ?>
		<div class="container" style="padding:32px;">
			<div class='row'>
				<div class='col-md-4 col-md-offset-1'>
					<?php echo "<img src='".base_url()."".$line->productPicture."' style='max-width:300px;'/>";?>
				</div>
				<div class="col-md-5">
					<div class="single-para">
						<div class="arrival-info">
						    <?php echo"<h4>".$line->productName."</h4>
						    <p>".$line->productCategory."</p>
						    <h5>".$line->productPrice."</h5>
						    <p>".$line->productDescription."</p> 
						    <a href='' class='btn btn-danger'>Order Now</a>";
						    ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php echo $footer; ?>
	<?php echo $script; ?>
</body>
</html>
