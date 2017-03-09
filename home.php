<?php session_start();
include "koneksi.php";
$query=mysql_query("select * from biodata");
$jumlah=mysql_num_rows($query);
echo "Selamat datang : ".$user;
echo "<br><br>";
echo "Jumlah data ada : ".$jumlah;
?>
<table border="1">
<tr>
	<th>NOMOR</th>
	<th>NAMA</th>
	<th>ALAMAT</th>
	<th>USIA</th>
	<th>AKSI</th>
</tr>
<?php
?>


<?php
  // Perintah untuk menampilkan data
  $queri= "select * from biodata "  ;  //menampikan SEMUA data dari tabel siswa
  $hasil=mysql_query ($queri);    //fungsi untuk SQL

if ($hasil === FALSE){
  die(mysql_error());
}
?>
<?php
$no=0;
while ($row = mysql_fetch_array($query)){
?>
	<tr>
		<td align="center"><?php echo $no=$no+1;?></td>
        <td><?php echo $row['NAMA'];?></td>
        <td><?php echo $row['ALAMAT'];?></td>
        <td align="center"><?php echo $row['USIA'];?></td>
        <td>
        	<a href="delete.php? id=>=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a>
        	<a href="update.php? id=<?php echo $row['id']; ?>">Update</a>
        </td>
    </tr>
   	<?php
    }
    ?>
    </table><br />
    <a href="logout.php">Logout</a>