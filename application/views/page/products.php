<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $style; ?>
</head>
<body>
<?php echo $header; ?>
  
    <div class="container" style="padding-bottom:20px;">
			<div class="container products-container">
				<h1 class="text-center" style="margin:30px;">Product Catalog</h1>
					
					</div>
					<form action="products.php" method="post">
					<div class="col-md-8 col-md-offset-2">
						<div class="btn-group btn-group-justified col-md-4" role="group" aria-label="...">
						  <div class="btn-group" role="group">
						    <button id="btnAll" name="btnAll" type="submit"  class="buttonM btn btn-default">All</button>
						  </div>
						  <div class="btn-group" role="group">
						    <button id="btnBouquet" name="btnBouquet" type="submit" class="buttonM btn btn-default">Hand Bouquet</button>
						  </div>
						  <div class="btn-group" role="group">
						    <button id="btnGraduation" name="btnGraduation" type="submit" class="buttonM btn btn-default">Graduation Bouquet</button>
						  </div>
						  <div id="btnBox" class="btn-group" role="group">
						    <button name="btnBox" id="btnBox" type="submit" class="buttonM btn btn-default">Flower Box</button>
						  </div>
						</div>	
					</div>
					</form>
					<?php
					
					?>
					<?php
						if (isset($_POST['btnBox'])){

							?>
							<style>
								#btnBox{
								background-color: #e5c100 !important ;
     							color:white !important;

							}
							</style>
							<?php
							$data = $conn->query('SELECT productID, productName, productCategory, productPrice, productPicture from products WHERE productCategory = "Flower Box" ');

						$ct = 1;
						 echo "<div class='row'>";
						foreach ($data as $line) {						
								echo "<div class='items-sec btm-sec'>";
					              echo "<div class='col-md-3 feature-grid'>";
					                echo  "<img src= '".$line['productPicture']. "' style='max-width:300px;'/>";
					                echo " <div class='arrival-info'>";
					                  echo "<h4>".$line['productName']."</h4>";
					                  echo "<p>".$line['productCategory']."</p>";
					                  echo "<h5>IDR ".$line['productPrice']."</h5>";
					                	
					                echo "</div>";
					                  echo "<div class='viw'>";
					                     echo "<form method='post' action='details.php'>
												<input type='hidden' name='productID' value='".$line['productID']."'>
												<button type='submit' class=' btn btn-link glyphicon glyphicon-eye-open' name='details'>View</button>
											</form>";

					                  echo "</div>";
					              echo "</div>";    
					            echo "</div>";
				            	if($ct%4 == 0) echo "</div><div class='row'>";

				            	$ct++;
					}
			
						}
						else if(isset($_POST['btnBouquet'])){
							?>
							<style>
								#btnBouquet{
								background-color: #e5c100 !important ;
     							color:white !important;

						}
							</style>
							<?php

							$data = $conn->query('SELECT productID, productName, productCategory, productPrice, productPicture FROM products WHERE productCategory = "Hand Bouquet"');


							$ct = 1;
							 echo "<div class='row'>";
							foreach ($data as $line) {						
									echo "<div class='items-sec btm-sec'>";
						              echo "<div class='col-md-3 feature-grid'>";
						                echo  "<img src= '".$line['productPicture']. "' style='max-width:300px;'/>";
						                echo " <div class='arrival-info'>";
						                  echo "<h4>".$line['productName']."</h4>";
						                  echo "<p>".$line['productCategory']."</p>";
						                  echo "<h5>IDR ".$line['productPrice']."</h5>";
						                	
						                echo "</div>";
						                  echo "<div class='viw'>";

						                     // echo "<a href='product.html'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span>View</a>";
						                     echo "<form method='post' action='details.php'>
													<input type='hidden' name='productID' value='".$line['productID']."'>
													<button type='submit' class=' btn btn-link glyphicon glyphicon-eye-open' name='details'>View</button>
												</form>";

						                  echo "</div>";
						              echo "</div>";    
						            echo "</div>";
					            	if($ct%4 == 0) echo "</div><div class='row'>";

					            	$ct++;
							}


						}
						else if(isset($_POST['btnGraduation'])){
							?>
							<style>
								#btnGraduation{
								background-color: #e5c100 !important ;
     							color:white !important;

						}
							</style>
							<?php
							$data = $conn->query('SELECT productID, productName, productCategory, productPrice, productPicture FROM products WHERE productCategory = "Graduation Flower"');


							$ct = 1;
							 echo "<div class='row'>";
							foreach ($data as $line) {						
									echo "<div class='items-sec btm-sec'>";
						              echo "<div class='col-md-3 feature-grid'>";
						                echo  "<img src= '".$line['productPicture']. "' style='max-width:300px;'/>";
						                echo " <div class='arrival-info'>";
						                  echo "<h4>".$line['productName']."</h4>";
						                  echo "<p>".$line['productCategory']."</p>";
						                  echo "<h5>IDR ".$line['productPrice']."</h5>";
						                	
						                echo "</div>";
						                  echo "<div class='viw'>";

						                     // echo "<a href='product.html'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span>View</a>";
						                     echo "<form method='post' action='details.php'>
													<input type='hidden' name='productID' value='".$line['productID']."'>
													<button type='submit' class=' btn btn-link glyphicon glyphicon-eye-open' name='details'>View</button>
												</form>";

						                  echo "</div>";
						              echo "</div>";    
						            echo "</div>";
					            	if($ct%4 == 0) echo "</div><div class='row'>";

					            	$ct++;
							}


						}else{
							?>
							<style>
								#btnAll{
								background-color: #e5c100 !important ;
     							color:white !important;

						}
							</style>
							<?php
							$data = $conn->query('SELECT productID, productName, productCategory, productPrice, productPicture FROM products');


							$ct = 1;
							 echo "<div class='row'>";
							foreach ($data as $line) {						
									echo "<div class='items-sec btm-sec'>";
						              echo "<div class='col-md-3 feature-grid'>";
						                echo  "<img src= '".$line['productPicture']. "' style='max-width:300px;'/>";
						                echo " <div class='arrival-info'>";
						                  echo "<h4>".$line['productName']."</h4>";
						                  echo "<p>".$line['productCategory']."</p>";
						                  echo "<h5>IDR ".$line['productPrice']."</h5>";
						                	
						                echo "</div>";
						                  echo "<div class='viw'>";

						                     // echo "<a href='product.html'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span>View</a>";
						                     echo "<form method='post' action='details.php'>
													<input type='hidden' name='productID' value='".$line['productID']."'>
													<button type='submit' class=' btn btn-link glyphicon glyphicon-eye-open' name='details'>View</button>
												</form>";

						                  echo "</div>";
						              echo "</div>";    
						            echo "</div>";
					            	if($ct%4 == 0) echo "</div><div class='row'>";

					            	$ct++;
							}							
						}
					?>
				</div>
			</div>


    
	</div>
<?php echo $script; ?>
<?php echo $footer; ?>
</body>
</html>