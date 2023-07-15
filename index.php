<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Penyewaan Ruko</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color:cream;">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> III </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ruko.php">Ruko</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="penyewa.php">Penyewa</a>
        </li>  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Cetak Data</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="printdataruko.php">Print Data Ruko</a></li>
            <li><a class="dropdown-item" href="printdatapenyewa.php">Print Data Penyewa</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<div class="container-fluid mt-3">
  <h2>Selamat Datang Di Website Sewa Ruko</h2>
  <p>Silahkan Akses Pada Menu-Menu Yang Tersedia</p>
</div>
<br></br>

<div class="row">
 <div class="col-xl-3 col-md-6">
  <div class="card bg-primary text-white mb-4">
   <div class="card-body">&#128188; Laporan Full Data Ruko</div>
    <div class="card-footer d-flex align-items-center justify-content-between">
     <a class="small text-white stretched-link" href="laporanruko.php">View Details</a>
     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
    </div>
  </div>
 </div>


 <div class="col-xl-3 col-md-6">
  <div class="card bg-primary text-white mb-4">
   <div class="card-body">&#128188; Laporan Full Data Penyewa</div>
    <div class="card-footer d-flex align-items-center justify-content-between">
     <a class="small text-white stretched-link" href="laporanpenyewa.php">View Details</a>
     <div class="small text-white"><i class="fas fa-angle-right"></i></div>
    </div>
  </div>
 </div>

</body>
</html>