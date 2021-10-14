<?php
$nama = $_POST['nama']; //isi nama
$alamat = $_POST['alamat']; // isi alamat
$email = $_POST['email']; // isi email
$status = $_POST['status']; // isi status
$komentar = $_POST['komentar']; //ISI KOMENTAR
echo "<head><title>My Guest Book</head></title>";
$fp = fopen("guestbook.txt","a+"); //mempertahankan konten file
fputs($fp,"$nama|$alamat|$email|$status|$komentar\n");
fclose($fp);
echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>";
echo "<a href=index.html> Isi Buku Tamu </a><br>";
echo "<a href=lihat.php> Lihat Buku Tamu </a><br>";