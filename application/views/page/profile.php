

<!DOCTYPE html>
<html lang="en">
<head>
  <?php echo $style; ?>
</head>
<body>
<?php echo $header; ?>
<div class="container login-sec">
	<div class="row ">
		<br><br><br>
		<div class="container">
			<h2 style="text-align:center;">Order History</h2>
			<table id="myTable" class="display" cellspacing="0" width="100%">	
			<thead>
	            <tr>
	                <th>Order ID</th>
	                <th>Status</th> <!--Waiting for payment, Packing, Delivery  -->
	            </tr>
	        </thead>
			</table>
			<tbody></tbody>
		</div>
			
	</div>
</div>


<?php echo $script; ?>
</body>
</html>