<?php

include "connect.php";

$no = $_POST['no'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$alamat = $_POST['alamat'];
$keterangan = $_POST['keterangan'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];


$fotobaru = date('dmYHis').$foto;

$path = "images/".$fotobaru;

if(move_uploaded_file($tmp, $path)){
  $query = "INSERT INTO data VALUES('".$no."', '".$nama."', '".$harga."', '".$alamat."', '".$keterangan."', '".$fotobaru."')";
  $sql = mysqli_query($connect, $query);
  if($sql){

    header("location: content.php");
  }else{

    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
}else{

  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>
