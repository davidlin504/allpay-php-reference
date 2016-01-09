<?php
 // 列印繳款單(統一超商 C2C)
 require('AllPay.Logistics.Integration.php');
 try {
 $AL = new AllpayLogistics();
// $AL->HashKey = '5294y06JbISpM5x9';
//  $AL->HashIV = 'v77hoKGq4kWxNNIS';
 $AL->HashKey = 'XBERn1YOvpM9nfZc';
 $AL->HashIV = 'h1ONHk4P4yqbl5LK';
 $AL->Send = array(
 'MerchantID' => '2000933',
 'AllPayLogisticsID' => 15435,
 'CVSPaymentNo' => F0020469,
 'CVSValidationNo' => 8853,
 'PlatformID' => ''
 );
 $Result = $AL->PrintUnimartC2CBill('列印繳款單(統一超商 C2C)');
 echo $Result;
 } catch(Exception $e) {
 echo $e->getMessage();
 }
?>