<html>
<head>
  <title></title>
  <link rel="stylesheet" href="table.css">
</head>
<body>
  <header class="atas">
    <h2 align="center">Daftar Makanan dan Minuman Khas Malang</h2>
  </header>
  <br>
<ul>
    <nav >
      <li> <a class="tombol" href="content.php">Daftar makanan</a> </li>
      <li> <a class="tombol" href="index.php">Keluar</a> </li>
    </nav>
     </ul>
       </br>

<section class="main">
  <h2 class="judul" href="form-edit.php"></h2>
  <a class="tombol" href="form_simpan.php">Tambah</a>

    <table border="1" width="100%">
      <thead>
    <tr>
      <th>No</th>
      <th>Foto</th>
      <th>Nama Makanan</th>
      <th>Alamat</th>
      <th>Harga</th>
      <th>Keterangan</th>
      <th colspan="2">Aksi</th>
    </tr>
    </thead>


  <?php

  include "connect.php";

  $query = "SELECT * FROM data";
  $sql = mysqli_query($connect, $query);
  while($data = mysqli_fetch_array($sql)){
    echo "<tr>";
    echo "<td>".$data['no']."</td>";
    echo "<td><img src='images/".$data['foto']."' width='150' height='150'></td>";
    echo "<td>".$data['nama']."</td>";
    echo "<td>".$data['harga']."</td>";
    echo "<td>".$data['alamat']."</td>";
    echo "<td>".$data['keterangan']."</td>";
    echo "<td> <a href='proses_hapus.php?no=".$data['no']."'>Hapus</a></td>";
    echo "</tr>";
  }
  ?>

</table>



</body>
</html>
<style media="screen">
table{
  width: 90%;
  border-collapse: collapse;
  margin: 50px auto;
  background: #000;
  font-family: 'Helvetica', sans-serif;
}

th{
  background: #3498db;
  color: white;
  font-weight: bold;
}
td, th{
  padding: 10px;
  border: 1px solid #ccc;
  text-align: left;
  font-size: 18px;
  text-decoration: none;
}
</style>
