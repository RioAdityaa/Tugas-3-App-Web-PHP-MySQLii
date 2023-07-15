<?php 
$kon=mysqli_connect("localhost","root","","tugasruko");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tabel Ruko</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<br></br>
<div class="container mt-3">
  <div class="row">
   <h2 class="col-sm-4">Tabel Ruko</h2>
   <div class="col-sm-8">
   <form name="frmcari" method="post" class="input-group mb-8" target="frmhasil" action="hasilcariruko.php">
   <input type="text" class="form-control" placeholder="Ketik kode rumah yang dicari" name="kCari" id="kCari">
   <button class="btn btn-success" type="submit" name="bCari">Cari</button>
  </form>
   </div>
  </div> 
  <form action="" method="post">
    <div class="mb-3 mt-3">
      <label for="koderuko">Kode Ruko :</label>
      <input type="text" class="form-control" id="koderuko" placeholder="Ketik Kode Ruko" name="koderuko">
    </div>
    <div class="mb-3">
      <label for="lokasi">Lokasi:</label>
      <input type="text" class="form-control" id="lokasi" placeholder="Enter lokasi" name="lokasi">
    </div>
    <div class="mb-3">
      <label for="namaruko">Nama Ruko:</label>
      <input type="text" class="form-control" id="namaruko" placeholder="Enter nama ruko" name="namaruko">
    </div>
	
	
    <button type="submit" class="btn btn-primary" name="bSimpan">Simpan</button>
  </form>
  <br></br>
  <iframe name="frmhasil" width="100%" height="400px"></iframe>
  <?php 
  if (isset($_POST['bSimpan'])) {
	  $koderuko=$_POST['koderuko'];
	  $lokasi=$_POST['lokasi'];
	  $namaruko=$_POST['namaruko'];
	  $sql="insert into `tabelruko` (koderuko,lokasi,namaruko) values ('".$koderuko."','".$lokasi."','".$namaruko."')";
	  $q=mysqli_query($kon,$sql);
  }
  ?>
</div>

</body>
</html>
