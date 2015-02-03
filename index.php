<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>شمس آباد بلور</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/slider.css">
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
                  <a class="navbar-brand" href="#"><img src="images/logo.png" class="img-responsive"></a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  
                  
                  <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right <?php if(isset($_GET['page']) && $_GET['page'] == 'home'){echo 'active';} ?>"><a href="?page=home">صفحه اصلی</a></li>
                    <li class="dropdown pull-right <?php if(isset($_GET['page']) && $_GET['page'] == 'jadval'){echo 'active';} ?>">
                      <a href="?page=products" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">محصولات <span class="caret"></span></a>
                      <ul class="dropdown-menu text-center" role="menu" dir="rtl">
                        <li><a href="?page=products">آرایشی بهداشتی</a></li>
                        <li><a href="#">استکان</a></li>
                        <li><a href="#">بلورجات تزیینی</a></li>
                        <li><a href="#">خودروسازی</a></li>
                        <li><a href="#">قندان</a></li>
                        <li><a href="#">لیوان و فنجان</a></li>
                        <li><a href="#">نمکدان</a></li>
                        <li><a href="#">سایر بلورجات</a></li>
                      </ul>
                    </li>
                    <li class="pull-right <?php if(isset($_GET['page']) && $_GET['page'] == 'jadval'){echo 'active';} ?>"><a href="?page=about">درباره ما</a></li>
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
        	<div class="col-sm-4 pull-right">
            	<h2 class="text-center">درباره ما</h2>
                <hr>
                <p align="justify">پایه گذاران شرکت شمس آباد بلور، با بیش از 35 سال تجربه در زمینه بلورسازی همواره در رقابت با رقبای داخلی و کشورهای هم جوار بوده اند.کیفیت محصولات این شرکت با وجود تمام مسائل و مشکلات اقتصادی ایجاد شده تاکنون رو به بهبودی بوده و این امر ادامه دار خواهد بود.</p>
            </div>
            <div class="col-sm-4 pull-right">
            	<h2 class="text-center">لینک های مرتبط</h2>
                <hr>
                <ul class="text-center">
                 <li><a href="#">صفحه اصلی</a></li>
                 <li><a href="#">محصولات</a></li>
                 <li><a href="#">درباره ما</a></li>
                 <li><a href="#">ارتباط با ما</a></li>
                </ul>
            </div>
            <div class="col-sm-4 pull-right">
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
<script type="text/javascript" src="js/jquery.mixitup.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.init.js"></script>
<script type="text/javascript" src="js/jquery.wp.custom.js"></script>
<script src="js/jssor.js"></script>
<script src="js/jssor.slider.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>