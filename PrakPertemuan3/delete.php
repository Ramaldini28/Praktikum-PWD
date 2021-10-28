<<?php 
include_once("koneksi.php");
$NIM= $_GET['NIM'];
$result=mysqli_query($con,"DELETE FROM mahasiswa WHERE NIM='$NIM'");
header("Location:index.php");
 ?>