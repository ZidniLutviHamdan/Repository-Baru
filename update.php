<?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysql_query("select * from biodata where id='$id'");
?>
<form action="simpan.php" method="post">
<table border="1">
<?php
  ?>
  <input type="hidden" name="id" value="<?php echo $id;?>"/>
  <tr>
  <td>Nama</td>
      <td><input type="text" echo $row['NAMA']></td>
  </tr>
  <tr>
  <td>Alamat</td>
  <td><input type="text" cols="20" rows="5" echo $row['alamat'];?></textarea></td>
  </tr>
  <tr>
  <td>Usia</td>
  <td><input type="text" echo $row['usia']></td>
  </tr>
  <tr><td><input type="submit" value="Simpan" name="simpan" /></td>
  </tr>
  <?php
?>
</table>
</form>