<?php
header("Content-Type: text/html; charset=utf-8");
$db_host = "localhost";
$db_username = "root";
$db_password = "1qaz2wsx";
$db_name = "專題";
$con = new mysqli($db_host,$db_username ,$db_password,$db_name);
if($con -> connect_error != ""){
    die("資料連接失敗");
}
else{
    echo "資料連接成功";
}


?>