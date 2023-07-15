<?php 
if (isset($_GET['namapenyewa'])) {
	$penyewadihapus=$_GET['namapenyewa'];
	$sql="delete from tabelpenyewa where namapenyewa='".$penyewadihapus."'";
	$kon=mysqli_connect("localhost","root","","tugasruko");
	$q=mysqli_query($kon,$sql);
}
header('location:penyewa.php');
?>