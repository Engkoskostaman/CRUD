<?php
session_start();
 include_once('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Read sewa</title>
  </head>
  <body>
    <h1 align="center">HALAMAN CRUD</h1>
  </br>
</br>
    <a href="formsewa.php">Tambah Sewa  </a>|<a href="logout.php">  Logout</a>

    <table border="1px">
   <tr>
        <th>No</th>
        <th>judul Buku</th>
        <th>Nama penyewa </th>
        <th>Tanggal sewa</th>
        <th>Durasi</th>
        <th>Tanggal selesai</th>
        <th>Action</th>
      </tr>
      <?php
        $query = mysqli_query($koneksi,'SELECT * FROM sewa');
        $no= 1;
        while($row=mysqli_fetch_array($query)){
          $tanggal_selesai = date('y-m-d',strtotime($row['tanggal_sewa'] ."+ $row[durasi] days"));
          echo "<tr>";
          echo"<td>$no</td>";
          echo"<td>$row[judul]</td>";
          echo"<td>$row[penyewa]</td>";
          echo"<td>$row[tanggal_sewa]</td>";
          echo"<td>$row[durasi]</td>";
          echo"<td>$tanggal_selesai</td>";
          echo "<td><a href='formeditsewa.php?id=$row[id]'>Edit</a>
                     <a href='prosesdeletesewa.php?id=$row[id]'>Delete</a></td>";
          $no++;
        }
       ?>

</table>


  </body>
</html>
