<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $style; ?>
</head>
<body>
<?php echo $header; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      	<ol class="carousel-indicators">
        	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        	<li data-target="#myCarousel" data-slide-to="1"></li>
      	</ol>
      	<div class="carousel-inner">
        	<div class="item">
              <img src="<?php echo base_url(); ?>img/bg1.jpg" style="width:100%" class="img-responsive"> 
        	</div>
        	<div class="item active">
          		<img src="<?php echo base_url(); ?>img/bg5.jpg" style="width:100%" class="img-responsive">
        	</div>
      	</div>
      	<!-- Controls -->
      	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
        	<span class="icon-prev"></span>
      	</a>
      	<a class="right carousel-control" href="#myCarousel" data-slide="next">
        	<span class="icon-next"></span>
      	</a>  
</div>
<div class="items">
    <div class="container-fluid" >
        <h1 style="text-align:center;">Our Products</h1>
		<?php
		foreach ($data as $line) {						
			echo "<div class='items-sec btm-sec'>";
				echo "<div class='col-md-3 feature-grid'>";
					echo  "<img src= '".base_url()."assets/uploads/files/img/".$line->productPicture. "' style='max-width:300px;'/>";
					echo " <div class='arrival-info'>";
					echo "<h4>".$line->productName."</h4>";
					echo "<p>".$line->productCategory."</p>";
					echo "<h5>IDR ".$line->productPrice."</h5>";        	
				echo "</div>";
				echo "<div class='viw'>";
					echo "<form method='post' action='".site_url()."/SingleProduct/index'>
							<input type='hidden' name='productID' value='".$line->productID."'>
							<button type='submit' class=' btn btn-link glyphicon glyphicon-eye-open' name='details'>View</button>
						</form>";

				echo "</div>";
			echo "</div>";    
		echo "</div>";
				            						}
?>
        <div style="margin-top: 50px; text-align:center;" class="col-md-12">
            <a href="<?php echo site_url()?>/Products/index"><button class="btn btn-danger">View More</button></a>  
        </div>
    </div>
</div>


<?php echo $script; ?>
<?php echo $footer; ?>
</body>
</html>