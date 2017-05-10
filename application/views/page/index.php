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
              <img src="img/bg1.jpg" style="width:100%" class="img-responsive"> 
        	</div>
        	<div class="item active">
          		<img src="img/bg5.jpg" style="width:100%" class="img-responsive">
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

<?php echo $script; ?>
<?php echo $footer; ?>
</body>
</html>