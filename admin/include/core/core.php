<?php
$mysqli = new mysqli('localhost', 'rayweb', 'rayweb1393', 'rayweb') or die('Connection Failed...!');
$mysqli->set_charset('utf8');
include('jdf.php');
include('SendSMS-parsgreen.php');
include('GetCredit.php');
?>