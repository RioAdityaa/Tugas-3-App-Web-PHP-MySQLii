<?php 
if (isset($_GET['koderuko'])) {
	$koderukodihapus=$_GET['koderuko'];
	$sql="delete from tabelruko where koderuko='".$koderukodihapus."'";
	$kon=mysqli_connect("localhost","root","","tugasruko");
	$q=mysqli_query($kon,$sql);
}
header('location:ruko.php');
?>