<?php
$conn = mysqli_connect("localhost","root","", "Library");
if (!$conn){
    die("Kết nối thất bại");
}



mysqli_query($conn , "SET NAME 'utf8'");

?>




