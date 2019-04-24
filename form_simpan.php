<html>
<head>
  <title></title>
  <link rel="stylesheet" href="formsimpan.css">
</head>
<body>
  <form method="post" action="proses_simpan.php" enctype="multipart/form-data">
<section id="input-form">
  <table class="table" cellpadding="8">
    <h1 style="font-family:sans-serif; margin-left:450px;">Tambah Daftar Makanan</h1>
   <div class="form">
      <tr>
        <td>No</td>
        <td><input type="text" name="no"></td>
      </tr>
    </div>
    <div class="form">
  <tr>
    <td>Nama Makanan</td>
    <td><input type="text" name="nama"></td>
  </tr>
  </div>
  <div class="form">
  <tr>
    <td>Harga</td>
    <td><input type="text" name="harga"></td>
  </tr>
  </div>
  <div class="form">
  <tr>
    <td>Alamat</td>
    <td><textarea name="alamat"></textarea></td>
  </tr>
  <div class="form">
  </div>
  <tr>
    <td>Foto</td>
    <td><input type="file" name="foto"></td>
  </tr>
  </div>
  <div class="form">
  <tr>
    <td>Keterangan</td>
    <td><textarea name="keterangan"></textarea></td>
  </tr>
  </div>
      <hr>
</table>
  <div class="form1">
  <a><input type="submit" value="Simpan">
  <a href="content.php"><input type="button" value="Batal"></a>
</div>
</section>

  </form>
</body>
</html>
<style media="screen">

body{
background-color: #038ade;
background-size: 100%;
background-position: 100%;
width: 100%;
}

.bg-blue{
  color: #fff;
  box-shadow: 0 0 7px 0px #55a8fd;
  border: 1px solid #55a8fd;
  cursor: pointer;
}

section#input-form{
  position: relative;
  max-width: 80%;
  margin-left: 10%;
  margin-right: 10%;
  margin-top: 60px;
  border-radius: 6px;
  background-color: #fff;
  box-shadow: 0 0 7px 0px rgba(136, 136,136, 0.2);
  padding: 30px;
}
#input-form .form{
  width: 100%
  display: grid;
  margin-top: 15px;
  margin-bottom: 15px;
}
#input-form .form1{
  width: 100%;
  margin-top: 5px;
  text-align: center;

}
label{
  font-family: 'Helvetica', sans serif;
  font-size: 16px;
  color: #333;
  font-weight: 600;
}
input{
  font-family: 'Helvetica', sans serif;
  padding: 10px 20px 10px 10px;
  border-radius: 3px;
  border: 1px solid #8888;
  margin-top: 5px;
  margin-bottom: 5px;
  font-size: 16px;
}
</style>
