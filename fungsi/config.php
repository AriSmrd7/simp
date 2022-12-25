<?php 
$conn = mysqli_connect("localhost","root","","manajemen_proyek");
 
// untuk cek koneksi, jika gagal, tampilkan error
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 
?>