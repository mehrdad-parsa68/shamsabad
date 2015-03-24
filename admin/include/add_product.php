

<?php
$error='';
if(isset($_POST['submit'])){
	### Assigning ####
	
	$product_name = $_POST['product_name'];
	$cat_id = $_POST['cat_id'];
	$picture = $_FILES['picture'];


	if($picture['error'] == "0"){
		$address = "../images/products/$picture[name]";
		move_uploaded_file($picture['tmp_name'],$address);
	
	
		

	

	
	#######  INSERT INTO DB ########
	$query = "INSERT INTO `products`
	(`id`, `product_name`,`picture`, `cat_id`) VALUES 
					('','$product_name','$picture[name]','$cat_id')";
					
	$result = mysqli_query($connection,$query);
	
	if($result){
		$error = '<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  اطلاعات با موفقیت ثبت شد
</div>';
		}else{
			$error = '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>اخطار!</strong> خطایی در ثبت اطلاعات رخ داده است
</div>';
			}
	}
}
?>


<div style="padding-top:50px">
    	<form dir="rtl" method="post" role="form" class="form-inline label_sabt" enctype="multipart/form-data">
        	<div>
                <label>نام محصول :</label>
                <input type="text" name="product_name" class="form-control">
            </div>
            <div>
                <label>نوع محصول :</label>
                <select name="cat_id" class="form-control" style="width:184px">
                  <option value="1">آرایشی و بهداشتی</option>
                  <option value="2">استکان</option>
                  <option value="3">بلورجات تزئینی</option>
                  <option value="4">خودروسازی</option>
                  <option value="5">قندان</option>
                  <option value="6">لیوان و فنجان</option>
                  <option value="7">نمکدان</option>
                  <option value="8">سایر بلورجات</option>
                </select>
            </div>
           
            <div>
                <label>عکس (300x 220):</label>
                <input type="file" name="picture">
            </div>
            <br>
            	<div>
            	<input type="submit" value="ثبت محصول" name="submit" class="form-control btn btn-primary">
                </div>
        </form>
</div>
        <?php echo $error; ?>