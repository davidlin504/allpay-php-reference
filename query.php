 <meta http-equiv="content-type" content="text/html; charset=utf-8">

 <FROM  METHOD="POST"  ACTION="query.php">
<input type="text" name="ax" value="">
<input type="submit" value="送出留言"> <input type="reset" value="清除留言">
</FROM>
<?php
 // 物流訂單查詢

 require('AllPay.Logistics.Integration.php');
 date_default_timezone_set("Asia/Taipei");
 try {
 $AL = new AllpayLogistics();
 $AL->HashKey = 'XBERn1YOvpM9nfZc';
 $AL->HashIV = 'h1ONHk4P4yqbl5LK';
 $AL->Send = array(
 'MerchantID' => '2000933',
 'AllPayLogisticsID' => $_GET[LogisticsID],
 'PlatformID' => ''
 );
 $Result = $AL->QueryLogisticsInfo();
  echo '<pre>' . print_r($Result, true) . '</pre>';
 } catch(Exception $e) {
 echo $e->getMessage();
 }
?>