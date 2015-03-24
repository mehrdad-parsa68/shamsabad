<?php
function rayweb_get_credit(){
$webServiceURL       = "http://login.parsgreen.com/Api/ProfileService.asmx?WSDL"; //آدرس وب سرویس را در این قسمت وارد کنید
$webServiceSignature = "C69FAC7E-63B3-4121-92B6-C09C70505807"; // امضای دیجیتالی خود را در این قسمت وارد کنید


$parameters  = array( // در این قسمت گزینه های مورد نظر ساخته می شوند برای ارسال
    'signature' => $webServiceSignature,
);


try {
    $connectionS = new SoapClient($webServiceURL); // ایجاد یک ارتباط اولیه با وب سرویس
    $responseSTD = (array) $connectionS->GetCredit($parameters); // انتقال اطلاعات و دریافت موجودی شما
    //بررسی حالت های خروجی تابع که جواب های مختلف می تواند داشته باشد.
    
    if ( $responseSTD['GetCreditResult'] == -64 ){
        echo " خطا ";
    } else {
		
    return floor($responseSTD['GetCreditResult']);
    }
    
} catch (SoapFault $ex) {
    echo $ex->faultstring; //زمانی که خطایی رخ دهد این قسمت خطا را چاپ می کند
    
}
}
?>