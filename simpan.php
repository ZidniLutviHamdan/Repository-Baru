<?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysql_query("delete from biodata where id='$id'");
if($query){
  ?><script language="javascript">document.location.href="home.php";</script><?php
}else{
  echo "gagal hapus data";
}
?>