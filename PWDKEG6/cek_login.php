<?php
session_start();    #Pengkondisian dengan kondisi jika variable ketemu > 0 maka mulaieksekusi session pada server dan kemudian menyimpannya pada browser.
include "koneksi.php";      #Termasuk file koneksi database yaitu untuk menghubungkan cek_login.php ke database akademik.
$id_user = $_POST['id_user'];   #Variable untuk menampung inputan id_user.
$pass = md5($_POST['paswd']);   #Variable untuk menampung inputan pass yang telah dienkripsi.
$sql = "SELECT * FROM users WHERE id_user='$id_user' AND password='$pass'";
if ($_POST["captcha_code"] == $_SESSION["captcha_code"]) {

$login = mysqli_query($con, $sql);
$ketemu = mysqli_num_rows($login);
$r = mysqli_fetch_array($login);    #Perintah sql untuk select semua data dari table users dimana id_user dan password adalah sesuai inputan.
if ($ketemu > 0) {    
    $_SESSION['iduser'] = $r['id_user'];
    $_SESSION['passuser'] = $r['password'];     #Inisialisasi variable id_user dan pass dari session.
    echo "USER BERHASIL LOGIN<br>";
    echo "id user =", $_SESSION['iduser'], "<br>";
    echo "password=", $_SESSION['passuser'], "<br>";
    echo "<p>alredy have account ? <a href=tampil_user.php>View User</a></p>";
    echo "<a href=logout.php><b>LOGOUT</b></a></center>";       #Untk menampilkan id_user dan password jika berhasil login.
} else {
    echo "<center>Login gagal! username & password tidak benar<br>";    #Jika kondisi tidak memenuhi maka jalankan perintah login gagal.
    echo "<a href=form_login.php><b>ULANGILAGI</b></a></center>";   #Fungsi untuk menutup koneksi database yang sebelumnya dibuka
}mysqli_close($con);
}
    else{
        echo "<center>Login gagal! Captcha tidak sesuai<br>";
        echo "<a href=from_login.php><b>ULANGILAGI</b></a></center>";
    }
?>