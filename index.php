<?php require_once('core/core.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
<title>شمس آباد بلور</title>
<meta name="description" content="بلور - بلور شمس آباد - شرکت بلور شمس آباد - پایه گذاران شرکت شمس آباد بلور، با بیش از 35 سال تجربه در زمینه بلورسازی همواره در رقابت با رقبای داخلی و کشورهای هم جوار بوده اند.">
<meta name="author" content="rayweb.ir | شرکت طراحی وب سایت رای وب">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/slider.css">
<link rel="stylesheet" type="text/css" href="css/component.css">
<link rel="stylesheet" type="text/css" href="css/fxtransparent.css">
<link rel="stylesheet" type="text/css" href="css/normalize.css">
<script src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<section>
			<nav class="navbar navbar-default">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-responsive logo-pic"></a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  
                  
                  <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right <?php if(isset($_GET['page']) && $_GET['page'] == 'home'){echo 'active';} ?>"><a href="?page=home">صفحه اصلی</a></li>
                    <li class="pull-right <?php if(isset($_GET['page']) && $_GET['page'] == 'products'){echo 'active';} ?>">
                      <a href="?page=products" >محصولات </a>
                      
                    </li>
                    <li class="pull-right <?php if(isset($_GET['page']) && $_GET['page'] == 'about'){echo 'active';} ?>"><a href="?page=about">درباره ما</a></li>
                    <li class="pull-right <?php if(isset($_GET['page']) && $_GET['page'] == 'contact'){echo 'active';} ?>"><a href="?page=contact">تماس با ما</a></li>
                    
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <?php
	if(isset($_GET['page'])){
				if(is_file('include/'.$_GET['page'].'.php')){
					include 'include/'.$_GET['page'].'.php';
					}else{
					die('صفحه مورد نظر وجود ندارد');
					}
				}else{
					include 'include/home.php';
					}


?>	

	</section>
    <div class="clearfix"></div>
    <footer class="footer-top">
    	<div class="container">
        	<div class="col-sm-4">
            	<h2 class="text-center">درباره ما</h2>
                <hr>
                <p align="justify">پایه گذاران شرکت شمس آباد بلور، با بیش از 35 سال تجربه در زمینه بلورسازی همواره در رقابت با رقبای داخلی و کشورهای هم جوار بوده اند.کیفیت محصولات این شرکت با وجود تمام مسائل و مشکلات اقتصادی ایجاد شده تاکنون رو به بهبودی بوده و این امر ادامه دار خواهد بود.</p>
            </div>
            <div class="col-sm-4">
            	<h2 class="text-center">لینک های مرتبط</h2>
                <hr>
                <ul class="text-center">
                 <li><a href="?page=home">صفحه اصلی</a></li>
                 <li><a href="?page=products">محصولات</a></li>
                 <li><a href="?page=about">درباره ما</a></li>
                 <li><a href="?page-contact">ارتباط با ما</a></li>
                </ul>
            </div>
            <div class="col-sm-4">
            	<h2 class="text-center">ارتباط با ما</h2>
                <hr>
                <h4 class="text-center"></h4>
                <p align="justify"> آدرس :کیلومتر 40 آزادراه تهران - قم، مجاور شهر حسن آباد، شهرک صنعتی شمس آباد، بلوار گلستان، گلشن 14، پلاک 6</p>
                <p align="justify">تلفن سفارشات : 56232025 - 021</p>
                <p align="justify">فکس : 56233378 - 021</p>
                
            </div>
        
        </div>
    
    
    </footer>
    <footer class="footer-end text-center">
    	<p>كليه حقوق اين وب سايت متعلق به شمس آباد بلور مي باشد.</p>
        <p style="margin-bottom:0">طراح : <a href="http://rayweb.ir">رای وب</a></p>
    </footer>


<script src="js/jquery.js"></script>
<script>

$(document).ready(function() {



	
});

	
</script>
<script src="js/bootstrap.min.js"></script>
<script>
			
		$(document).ready(function() {
				$( "a.a-filter" ).click(function() {
					// get the value from text field
					var input = $(this).attr('value');
					$( "a.a-filter" ).removeClass('active-a');
					$(this).addClass('active-a');
					// check wheather the matching element exists
						// by default every list element will be shown
						
						if(input == 'all'){
							$(".content").show(1000);
							}else{
						$("[data-label*="+ input +"]").show(1000);
						
						// Non related element will be hidden after input
						$(".content").not("[data-label*="+ input +"]").hide(1000);
						
							}
				});
			});
		</script>
<script src="js/jssor.js"></script>
<script src="js/jssor.slider.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/classie.js"></script>
<script src="js/main.js"></script>



</body>
</html>