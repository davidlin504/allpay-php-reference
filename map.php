<?php
require('AllPay.Logistics.Integration.php'); try {
$AL = new AllpayLogistics(); $AL->Send = array(
'MerchantID' => '2000132',
'MerchantTradeNo' => date('YmdHis'),
'LogisticsSubType' => LogisticsSubType::UNIMART,
'IsCollection' => IsCollection::NO,
'ServerReplyURL' => 'http://localhost/allpay/store.php', 'ExtraData' => '測試額外資訊',
'Device' => Device::PC
);
$Result = $AL->CvsMap('電子地圖', '_blank'); echo $Result;
} catch(Exception $e) { echo $e->getMessage();
} ?>