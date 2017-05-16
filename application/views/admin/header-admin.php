<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $style; ?>
</head>
<body>
<?php echo $header; ?>
<div>Header Admin</div>
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

<?php echo $script; ?>
<?php echo $footer; ?>
</body>
</html>