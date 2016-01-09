<?php
class Demo {
    const c = "constant value\n";
     
    function do_something() {
        return self::c;
    }
}
 
define("c","def");
echo Demo::c;
$d = "Demo";
echo $d::c;
$o = new Demo();
echo $o::c;
echo $o->do_something();
 
/* 《程式語言教學誌》的範例程式
    http://pydoing.blogspot.com/
    檔名：class02.php
    功能：示範 PHP 程式 
    作者：張凱慶
    時間：西元 2013 年 2 月 */
?>