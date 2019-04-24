<?php

include "connect.php";

$no = $_GET['no'];

$query = "SELECT * FROM data WHERE no='".$no."'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);
if(is_file("images/".$data['foto']))
  unlink("images/".$data['foto']);
$query2 = "DELETE FROM data WHERE no='".$no."'";
$sql2 = mysqli_query($connect, $query2);
if($sql2){
  header("location: content.php");
}else{

  echo "Data gagal dihapus. <a href='content.php'>Kembali</a>";
}
?>
