


<?php

$test = parse_url("http://logistics-stage.allpay.com.tw/Express/ExecMpServerPost?AllPaySubMerchantID=0&LogisticsID=15425&LogisticsType=20001&MerchantID=2000933&MerchantTradeNo=20160108234826&v=29E9DDC42F13E77F4D1D70C22085F501");  
print_r($test);  

$a=array("Banana"=>"香蕉","Apple"=>"蘋果","Watermelon"=>"西瓜");
$b=array();
$b[1]=$a;
$b[2]=array("1","2","3");

print_r($b); 


for($i=0;$i<10;$i++) {
　echo $i. '-' ;
}


?>