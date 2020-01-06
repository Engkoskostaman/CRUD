<?php
include_once('koneksi.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi,"SELECT * FROM sewa WHERE id='$id'");
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>form edit sewa </title>
  </head>
  <body>
    <form action="proseseditsewa.php?id=<?php echo $id;?>"method="post">

      <label>judul Buku</label>
      <div><input type="text" name="judul"value="<?php echo $row['judul'] ?>"></div>

      <label>Nama penyewa</label>
      <div><input type="text" name="penyewa"value="<?php echo $row['penyewa'] ?>"></div>

      <label>Durasi sewa</label>
      <div><input type="text" name="durasi"value="<?php echo $row['durasi'] ?>"></div>

      <div>
        <input type="submit" name="sewa" value="sewa buku">
      </div>

      </form>

        </body>
</html>
