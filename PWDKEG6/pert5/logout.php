<?php
session_start();        #Untuk memulai eksekusi session pada server dan kemudian menyimpannya pada browser.
session_destroy();      #Bagian ini menjelaskan bahwa semua session yang telah dibuat dandiinisialisasi akan di destroy atau dihancurkan.
echo "Anda telah sukses keluar sistem <b>LOGOUT</b>";
header('location:form_user.php');   #Untuk menpilkan pesan “Anda telahsukses keluar system LOGOUT”
?>