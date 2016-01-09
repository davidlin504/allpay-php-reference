



<?php


 require('AllPay.Logistics.Integration.php');
    //Open data.csv
    $file =fopen("data.csv", "r");
    //Read data until end
    $i=0;
    while (!feof($file)) {
        $row =fgetcsv($file);

	if ($row[2]=="統一"){
		$row[2]='UNIMART';
	}

	if ($row[2]=="全家"){
		$row[2]='FAMI';
	}
    




        print_r("商品名稱	 訂單金額	 物流廠商全家	貨到付款	收件人姓名	收件人電話	收件門市");
        print_r("---------       ");
        echo "<br>";
        print_r($row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]." ".$row[5]." ".$row[6]." ");
      
        
         // echo $i;


     $a=array();
    $a[i]=$i;
    echo $a[i];	
    //Close file
    // 超商取貨物流訂單建立


try {
 $AL = new AllpayLogistics();
$AL->HashKey = 'XBERn1YOvpM9nfZc';
 $AL->HashIV = 'h1ONHk4P4yqbl5LK';
 $AL->Send = array(

 'MerchantID' => "2000933",
 'MerchantTradeNo' => date('YmdHis'),
 'MerchantTradeDate' => date('Y/m/d H:i:s'),
 'LogisticsType' => LogisticsType::CVS,
 'LogisticsSubType' => LogisticsSubType::UNIMART_C2C,
 'GoodsAmount' => (int)$row[1],
 'CollectionAmount' => 5566,
 'IsCollection' => IsCollection::YES,
 'GoodsName' => "c4",
 'SenderName' => '歐付寶(寄)',
 'SenderPhone' => '0226550115',
 'SenderCellPhone' => '0911222333',
 'ReceiverName' => '歐付寶(收)',
 'ReceiverPhone' => '0226550115',
 'ReceiverCellPhone' => '0933222111',
 'ReceiverEmail' => 'sample@allpay.com.tw',
 'TradeDesc' => '測試交易敘述',
 'ServerReplyURL' => 'http://www.sample.com.tw/ServerReplyURL.php',
 'ClientReplyURL' => 'http://localhost/allpay/query.php',
 'LogisticsC2CReplyURL' => 'http://www.sample.com.tw/LogisticsC2CReplyURL.php',
 'Remark' => '測試備註',
 'PlatformID' => ''
 );

 $AL->SendExtend = array(
 'ReceiverStoreID' => '991182',
 'ReturnStoreID' => '991182'
 );
 $Result = $AL->CreateShippingOrder('物流訂單建立', '_blank');
 echo $Result;
 // $a[i]=$Result;

 } catch(Exception $e) {
 echo $e->getMessage();
 }


    //

     // $i=$i+1;
   

    print_r("---------       ");
 echo "<br>";
}



    fclose($file);



print_r($a);
    ?>