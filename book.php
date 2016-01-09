<?php
// 超商取貨物流訂單建立 require('AllPay.Logistics.Integration.php'); try {
require('AllPay.Logistics.Integration.php'); 
try {

$AL = new AllpayLogistics(); 
$AL->HashKey = 'XBERn1YOvpM9nfZc'; 
$AL->HashIV = 'h1ONHk4P4yqbl5LK'; 
$AL->Send = array(
'MerchantID' => '2000933',
'MerchantTradeNo' => date('YmdHis'), 
'MerchantTradeDate' => date('Y/m/d H:i:s'), 
'LogisticsType' => LogisticsType::CVS, 
'LogisticsSubType' => LogisticsSubType::UNIMART_C2C,
 'GoodsAmount' => 1500,
'CollectionAmount' => 10,
'IsCollection' => IsCollection::YES,
'GoodsName' => '測試商品',
'SenderName' => '歐付寶(寄)',
'SenderPhone' => '0226550115',
'SenderCellPhone' => '0911222333',
'ReceiverName' => '歐付寶(收)',
'ReceiverPhone' => '0226550115',
'ReceiverCellPhone' => '0933222111',
'ReceiverEmail' => 'sample@allpay.com.tw',
'TradeDesc' => '測試交易敘述',
'ServerReplyURL' => 'http://www.sample.com.tw/ServerReplyURL.php', 
'ClientReplyURL' => 'http://www.sample.com.tw/ClientReplyURL.php',
 'LogisticsC2CReplyURL' => 'http://www.sample.com.tw/LogisticsC2CReplyURL.php', 
 'Remark' => '測試備註',
'PlatformID' => '' );
$AL->SendExtend = array( 'ReceiverStoreID' => '991182', 'ReturnStoreID' => '991182'
);
$Result = $AL->CreateShippingOrder('物流訂單建立', '_blank'); echo $Result;

} catch(Exception $e) { echo $e->getMessage();
} ?>