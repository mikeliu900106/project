<?php
$hn = "localhost";
$db = "專題";
$un = "root";
$pw = "1qaz2wsx";

$con= new mysqli($hn,$un,$pw,$db );
if( $con -> connect_error){ 
    die ("Fatal Error");
}


?>