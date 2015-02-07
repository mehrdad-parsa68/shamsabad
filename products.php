<?php 
 $query = "SELECT * FROM `products`";
 $result = mysqli_query($connection,$query);
?>

<section>
   
        <div class="container product-page">
            
            <div class="row isotope">
                           <a class="filter active" data-filter="all" href="#">نمایش همه</a>
                           <select>
                           <option value="all">همه</option>
                            <?php 
								$cat_query = "SELECT * FROM `category`";
								$cat_result = mysqli_query($connection,$cat_query);
								while($cat_row = mysqli_fetch_assoc($cat_result)){	
								echo "<option value='category_".$cat_row['id']."'>".$cat_row['cat_name'].'</option>';
									}
							 ?>
                         </select>
					<?php
                     while($row = mysqli_fetch_assoc($result)){
					   $cat = $row['id'];
					   
					
					   echo"
						<div data-label='category_".$cat."' class='col-lg-4 col-md-4 col-sm-6 content'>
							<div class='w-box inverse'>
								<div class='figure'>
									<a class='example-image-link' href='images/".$row['picture']."' data-lightbox='example-set'>
									<img alt='' src='images/".$row['picture']."' class='img-responsive'>
									</a>
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

