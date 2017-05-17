

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
	                <th>Payment</th>
	            </tr>
	        </thead>
			
			<tbody>
			<?php
				foreach ($data as $line) {
					echo"<tr>
	                <td><a href='".site_url("products/orderdetails/".$line->orderID)."'>".$line->orderID."</a></td>
	                <td>".$line->status."</td> 
	                <td><a href='".site_url("products/confirmpayment/".$line->orderID)."'>Payment</a></td>
	            </tr>";
				}
			 ?>
			</tbody>
			</table>
		</div>
			
	</div>
</div>


<?php echo $script; ?>
</body>
</html>