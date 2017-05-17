<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<style>

</style>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <ul class="nav navbar-nav">
    <a class="navbar-brand" href="#"><img src="<?php echo base_url();?>img/logo.png" style="width:120px; padding-top:0px;"></a>	
    </ul>
      
    </div>
	<ul class="nav navbar-nav navbar-right">
     <li class="active" style="float:right;"><a href="<?php echo site_url("signin/sign_out");?>">Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container">
	
	<div class="row">
			<div class="col-md-3">
				<ul class="nav nav-pills nav-stacked">
				  <li class="active"><a href='<?php echo site_url('admin/customers_management')?>'>Customers</a></li>
				  <li><a href='<?php echo site_url('admin/orders_management')?>'>Orders</a></li>
				  <li><a href='<?php echo site_url('admin/products_management')?>'>Products</a></li>
				  <li><a href='<?php echo site_url('admin/orderdetails_management')?>'>Order Details</a></li>
				</ul>
			</div>
			<div class="col-md-9">
				<?php echo $output; ?>
		    </div>
		</div>
</div>
			
	
    
</body>
</html>
