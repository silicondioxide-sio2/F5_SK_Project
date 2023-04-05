<?php
$host="localhost";
$user="root";
$password="";
$database="sistem pengualan komputer"; //nama haruslah bersama dengan nama file database

//perlu sama dengan variable di atas
$conn=mysqli_connect($host,$user,$password,$database);
if(mysqli_connect_errno()){
    echo"Failed connect to database";
    exit();
}
//Setup Maklumat Sistem
?>
