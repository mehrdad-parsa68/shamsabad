<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>شمس آباد بلور</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/slider.css">
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
                  <a class="navbar-brand" href="#">Brand</a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  
                  
                  <ul class="nav navbar-nav navbar-right">
                    <li class="pull-right <?php if(isset($_GET['page']) && $_GET['page'] == 'home'){echo 'active';} ?>"><a href="?page=home">صفحه اصلی</a></li>
                    <li class="dropdown pull-right <?php if(isset($_GET['page']) && $_GET['page'] == 'jadval'){echo 'active';} ?>">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">محصولات <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </li>
                    <li class="pull-right <?php if(isset($_GET['page']) && $_GET['page'] == 'jadval'){echo 'active';} ?>"><a href="#">درباره ما</a></li>
                    <li class="pull-right <?php if(isset($_GET['page']) && $_GET['page'] == 'contact'){echo 'active';} ?>"><a href="?page=contact">تماس با ما</a></li>
                    <li class="pull-right <?php if(isset($_GET['page']) && $_GET['page'] == 'jadval'){echo 'active';} ?>"><a href="#">صفحه اصلی</a></li>
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
    
    
    
    </footer>
    <footer class="footer-end text-center">
    	<p>كليه حقوق اين وب سايت متعلق به شرکت بلور شمس آباد مي باشد.</p>
        <p style="margin-bottom:0">طراح : <a href="http://rayweb.ir">رای وب</a></p>
    </footer>
<script src="js/jquery.js"></script>
<script src="js/jssor.js"></script>
<script src="js/jssor.slider.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>