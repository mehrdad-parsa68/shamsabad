<?php 
 $query = "SELECT * FROM `products`";
 $result = mysqli_query($connection,$query);
?>

<section class="slice bg-3 animate-hover-slide">
    <div class="w-section inverse work">
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="margin-top:60px">
                    <div class="btn-group pull-right">
                        <button id="btn" type="button" class="btn btn-menu category">دسته بندی پروژه ها</button>
                        <button type="button" class="btn btn-menu dropdown-toggle category" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right button-group" role="menu" data-filter-group="product">
                            <li class="filter active" data-filter="all"><a>نمایش همه</a></li>
                            <?php 
								$cat_query = "SELECT * FROM `category`";
								$cat_result = mysqli_query($connection,$cat_query);
								while($cat_row = mysqli_fetch_assoc($cat_result)){
									
								echo '
							
								<li><a href="#" data-filter="category_'.$cat_row['id'].'" tabindex="-1">'.$cat_row['cat_name'].'</a></li>
								';
									
									
									}
							 ?>
                             
                        
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row isotope">          
                
					<?php
                     while($row = mysqli_fetch_assoc($result)){
					   $cat = $row['cat_id'];
					   
					
					   echo"
						<div data-filter='category_".$cat."' class='col-lg-4 col-md-4 col-sm-6'>
							<div class='w-box inverse'>
								<div class='figure'>
									<img alt='' src='images/".$row['picture']."' class='img-responsive'>
								
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
    </div>
</section>

