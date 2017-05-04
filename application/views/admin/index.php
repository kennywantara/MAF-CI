<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $style; ?>
    

</head>
<body>
	<?php echo $header; ?>
	
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-md-offset-11">
                <a href="product/form"><button class="btn btn-primary" style="margin:60px;">Add Product</button></a>    
            </div>
            
        </div>
        
    </div>
    <?php
	echo "<table id='myTable' class='display' cellspacing='0' width='100%'>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Picture</th>  
                </tr>
            </thead>";
		echo "<tbody>";
		
		foreach ($lines as $line) {
			echo "<tr>";
			    echo "<td>".$line->productID."</td>";
    			echo "<td>".$line->productName."</td>";
    			echo "<td>".$line->productCategory."</td>";
                echo "<td>".$line->productPrice."</td>";
                /*echo "<td>".$line['productDescription']."</td>";*/
                echo "<td class='product_picture'><img src=".base_url()."".$line->productPicture. " style='max-width:100px;'/></td>";
            echo "</tr>";
		}
		echo "</tbody>";
        echo "</table>";
	?>
	<?php echo $footer; ?>
	<?php echo $script; ?>
     <script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').DataTable();})
    </script>
</body>
</html>