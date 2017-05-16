<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
</head>
<body>
	<div class="row">
		<div class="col-md-3">
			<ul class="nav nav-pills nav-stacked">
			  <li class="active"><a href='<?php echo site_url('admin/customers_management')?>'>Customers</a></li>
			  <li><a href='<?php echo site_url('admin/orders_management')?>'>Orders</a></li>
			  <li><a href='<?php echo site_url('admin/products_management')?>'>Products</a></li>
			  <li><a href='<?php echo site_url('admin/orderdetails_management')?>'>Order Details</a></li>
			</ul>
		</div>
	</div>
	<div>
		
	</div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
