<?php 
 $query = "SELECT * FROM `products` ORDER BY RAND()";
 $result = mysqli_query($connection,$query);
?>

<section>
   
        <div class="container product-page">
            
            <div class="row products-show">
                        
                           <ul class="col-sm-3 pull-right" style="height:100%">
                           <li><a class="a-filter" href='#' value="all">همه</a></li>
                            <?php 
								$cat_query = "SELECT * FROM `category`";
								$cat_result = mysqli_query($connection,$cat_query);
								while($cat_row = mysqli_fetch_assoc($cat_result)){	
								echo "<li><a href='#' class='a-filter' value='category_".$cat_row['id']."'>".$cat_row['cat_name'].'</a></li>';
									}
							 ?>
                         </ul>
					<?php
                     while($row = mysqli_fetch_assoc($result)){
					   $cat = $row['cat_id'];
					   
					
					   echo"
						<div data-label='category_".$cat."' class='col-lg-3 col-md-3 col-sm-4 content pull-right'>
							<div class='w-box inverse'>
								<div class='figure'>
									
									<img alt='' src='images/products/".$row['picture']."' class='img-responsive'>
									
								</div>
								<div class='row'>
									<div class='text-center'>
										<p>".$row['product_name']."</p>
									</div>
									
								</div>
							</div>
						</div>";
				   }
                    ?>
           	
						
                    <div class="gap"></div>
                
                                
            </div>
        </div>
    <script>
    	/*$(document).ready(function() {
            var test = window.document.URL;
			var test2 = decodeURI(test);
			
			
        });*/
		
    </script>
</section>

