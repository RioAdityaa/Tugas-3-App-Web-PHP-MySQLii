<?php
  
  //sesuaikan dengan database, username, dan password kalian masing-masing
  $servername     = "localhost";
  $database       = "tugasruko"; 
  $username       = "root";
  $password       = "";

  // membuat koneksi
  $conn = mysqli_connect("localhost","root","","tugasruko");

?>
 <br></br>
 <h1>FORM PENYEWA</h1>
 <br>
 
<?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>

<hr>
 
<table border="1">
	<tr>
	      <th>No</th>
	      <th>Nama Penyewa</th>
        <th>Nomor Penyewa</th>
	</tr>
	<?php 
          //jika cari_jenis_barang sudah diset maka masukkan datanya ke dalam variabel $cari
          if(isset($_GET['koderuko'])){
              $cari = $_GET['koderuko'];

              //ambil data dari database, dimana pencarian sesuai dengan variabel cari
              $data = mysqli_query($conn, "select * from tabelpenyewa where namapenyewa like '%".$cari."%'");				
          }else{

              //tapi jika cari_jenis_barang belum diset, maka tampilkan semua isi tabel data barang
              $data = mysqli_query($conn, "select * from tabelpenyewa");		
          }
          //set nomor tabel
          $no = 1;

          //melooping data menggunakan while
          while($d = mysqli_fetch_array($data)){
	?>
	<tr>
		      <td><?php echo $no++; ?></td>
	      	<td><?php echo $d['namapenyewa']; ?></td>
          <td><?php echo $d['nomorpenyewa']; ?></td>
          
	</tr>
	<?php } ?>
</table>
<script>
      window.print()
  </script>