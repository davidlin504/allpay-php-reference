
<h1>C2C物流訂單建立</h1>

<form action="store.php" method="post"> 

<p>商品名稱： <input name="price" type="text" />  </p>

<p>金額： <input name="pass" type="text" />	</p>

<p>密碼： <input name="pass" type="text" />	</p>
<label for="">運送方式</label>
<select name="method" >
  <option value='FAMIC2C'>全家店到店</option>
  <option value='UNIMARTC2C'>7-11店到店</option>
</select>
<label for="">是否貨到付款</label>
<select name="collection" >
  <option value='Y'>貨到付款</option>
  <option value='N'>僅配送</option>
</select>


<input type="submit" name="button" id="button" value="送出" /> </p>

</form>


 <?php

	// if ($_POST[price]=="統一"){
	// 	$_POST[price]="統一" ;
	// }

	//  if ($_POST[price]=="貨到付款"){
	// 	$_POST[price]="貨到付款" ;
	// }

 	echo $_POST[method]."貨到付款".$_POST[collection];
 	


 	// $num = (int)$_POST[price];
 	// echo $num;
 	


 ?> 

<?php
 // 超商取貨物流訂單建立
 require('AllPay.Logistics.Integration.php');


 try {
 $AL = new AllpayLogistics();
 $AL->HashKey = 'XBERn1YOvpM9nfZc';
 $AL->HashIV = 'h1ONHk4P4yqbl5LK';
 $AL->Send = array(

 'MerchantID' => "2000933",
 'MerchantTradeNo' => date('YmdHis'),
 'MerchantTradeDate' => date('Y/m/d H:i:s'),
 'LogisticsType' => LogisticsType::CVS,
 'LogisticsSubType' => $_POST[method],
 'GoodsAmount' => 9,
 'CollectionAmount' => 10,
 'IsCollection' => 'Y',
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
 // 'ClientReplyURL' => '',
 'LogisticsC2CReplyURL' => 'http://www.sample.com.tw/LogisticsC2CReplyURL.php',
 'Remark' => '測試備註',
 'PlatformID' => ''
 );

 $AL->SendExtend = array(
 'ReceiverStoreID' => '991182',
 'ReturnStoreID' => '991182'
 );
 $Result = $AL->CreateShippingOrder('物流訂單建立', '_blank');


 } catch(Exception $e) {
 echo $e->getMessage();
 }
 echo $Result;
 echo "test url";
?>



