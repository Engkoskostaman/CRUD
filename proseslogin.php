<?php

include_once("koneksi.php");

   $username = $_POST['username'];
   $password = $_POST['password'];

	 $query = mysqli_query($koneksi, "SELECT * FROM user
	 WHERE username='$username' AND password='$password'");

   if (mysqli_num_rows($query) == 0){
     header("location:index.php?page=login&notif=true");
   }else{

   header('location:home.php');
}
?>
