<?php
if(isset($_POST['submit'])){
	
	$to = 'info@shamsabadglass.com';
	$subject = 'ایمیل از طرف وب سایت';
	$mail = $_POST['mail'];
	$message = 'ایمیل از طرف : '.$mail."\n".
	$message = 'نام و نام خانوادگی : '.$_POST['name']."\n".
	'شماره تماس : '.$_POST['phone'].
	"\n".$_POST['message'];

	$headers = "From: $mail<$mail>\n";
	$headers .= "Reply-To: $mail<$mail>\n";
	$headers .= "X-Sender: $mail<$mail>\n";
	$headers .= "X-Mailer: PHP4\n"; //mailer
	//$headers .= "X-Priority: 3\n"; //1 UrgentMessage, 3 Normal
	$headers .= "MIME-Version: 1.0\n";
	//$headers .= "X-MSMail-Priority: High\n";
	//$headers .= "Importance: 3\n";
	//$headers .= "Date: $date\n";
	//$headers .= "Delivered-to: $to\n";
	//$headers .= "Return-Path: $mail<$mail>\n";
	$headers .= "Envelope-from: $mail<$mail>\n";
	$headers .= "Content-Transfer-Encoding: 8bit\n";
	$headers .= "Content-Type: text/plain; charset=UTF-8\n";

mail($to, $subject, $message, $headers);
	
	}
?>
<div class="container">
<div class="col-sm-10 col-sm-offset-1 about" >
			<div class="text-center info panel panel-default">
            	<div class="panel-heading">با ما در ارتباط باشید</div>

				<div class="panel-body">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26035.39479788235!2d51.22535911639408!3d35.34511375807193!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzXCsDIwJzI3LjAiTiA1McKwMTMnMzUuMiJF!5e0!3m2!1sen!2sua!4v1427195172615" width="100%" height="450" frameborder="0" style="border:0"></iframe>
<div class="clearfix"></div>

<div class="col-sm-6 pull-right">
		
        <div class="text-center info panel panel-default">
            	<div class="panel-heading">ارتباط با مدیریت</div>

				<div class="panel-body">	
        <form id="contact-form" role="form" method="post">
            <div class="form-group name">
                <label for="name">نام و نام خانوادگی</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group name">
                <label for="name">تلفن</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="form-group email">
                <label for="email">ایمیل</label>
                <input type="email" class="form-control" id="mail" name="mail"  required>
            </div>        
            <div class="form-group message">
                <label for="message">متن پیام</label>
                <textarea class="form-control" rows="6" id="content" name="message"  required></textarea>
            </div>
            <input name="submit" type="submit" value="ارسال پیام" class="btn btn-default">
        </form>
        
        <br>
   </div></div>
</div>
			<div class="col-sm-6 pull-right">
			<div class="text-center info panel panel-default">
            	<div class="panel-heading">راه های ارتباطی</div>

				<div class="panel-body">
                	<h3>آدرس :</h3>
                    <p>کیلومتر 40 آزادراه تهران - قم، مجاور شهر حسن آباد، شهرک صنعتی شمس آباد، بلوار گلستان، گلشن 14، پلاک 6</p>
                    <hr>
                    <h3>تلفن سفارشات :</h3>
                    <p>56232025 - 021</p>
                    <p>56233377 - 021</p>
                    <hr>
                    <h3>فکس :</h3>
                    <p>56233378 - 021</p>
                    <hr>
                    <h3>ایمیل :</h3>
                    <p>info@shamsabadglass.com</p>
        
        
       		</div>
        </div>
        </div>
        
       		</div>
        </div>
        </div>	
		</div>

