<?php 
    if($_POST["booking1"]==1){
    $booking1=1; }else{$booking=0;}
    $code1= $_POST["code1"]; 
    if($_POST["booking2"]==1){
    $booking1=1; }else{$booking=0;}
    $code1= $_POST["code2"]; 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="weleb4";
    $_mysqli = new mysqli($servername, $username, $password, $db);

    $sql = mysqli_query($_mysqli,"update product set booking=$booking1 where product_code='$code1' ");
    $sql = mysqli_query($_mysqli,"update product set booking=$booking2 where product_code='$code2' ");

?>