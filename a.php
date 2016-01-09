<meta http-equiv="content-type" content="text/html; charset=utf-8">

<form action="a.php" method="post"> <!–用post的方式，將變數傳遞到b.php–>

<p>帳號： <input name="price" type="text" /> <!–名稱為id的文字欄位將傳至b.php為變數–> </p>

<p>密碼： <input name="pass" type="text" />	<!–名稱為pass的文字欄位將傳至b.php為變數–>

<input type="submit" name="button" id="button" value="送出" /> </p>

</form>


 <?php
	$a = $_POST[price];
 	echo $a;
 	$num = (int)$a;
 	echo $num;
 	


 ?> 