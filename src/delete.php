<?php


include ("config/config.php");

if(isset($_GET['bd_madg'])) {
    $id = $_GET['bd_madg'];
    $sql = "delete from docgia where bd_madg = '$id'";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
}
?>