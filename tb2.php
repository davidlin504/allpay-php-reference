<?php
      header("Content-Type: text/html; charset=utf-8");
      $link=mysql_connect("127.0.0.1","root","1234") or die("連接失敗");
      if(mysql_select_db("db1")) { 
            mysql_query("DROP TABLE IF EXISTS tb2");
            $sqlstr="create table tb2(message varchar(30)) charset=utf8";
            mysql_query($sqlstr) or die("資料表建立失敗");  
            echo "資料表重新建立成功";
      }
?>