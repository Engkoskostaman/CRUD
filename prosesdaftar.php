<?php
include_once("koneksi.php");

$npm      =$_POST['npm'];
$username =$_POST['username'];
$password =$_POST['password'];

mysqli_query($koneksi,"INSERT INTO user (npm,username,password)
VALUES ('$npm','$username','$password')");
header("location:index.php");

?>
