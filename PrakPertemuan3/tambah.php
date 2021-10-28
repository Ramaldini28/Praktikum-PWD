<?php
    //Membuat database terhubung menggunakan koneksi.php
include_once("koneksi.php");
$result = mysqli_query($con, "SELECT * FROM mahasiswa");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Halaman Utama</title>
  </head>
  <body>
  <div class="container">
        <h1>Tambah Data Mahasiswa</h1>
        <a href="index.php" class="btn btn-success btn-sm m-2">Lihat Data</a>

        <form action="" method="post">
            <div class="form-groub">
                <label>NIM</label>
                <input type="number" name="NIM" class="form-control" required>
            </div>
            <div class="form-groub">
                <label>Nama</label>
                <input type="text" name="Nama" class="form-control" required>
            </div>
            <div class="form-groub">
                <label>alamat</label>
                <input type="text" name="Alamat" class="form-control" required>
            </div>
            <div class="form-groub">
                <label>Gender(M/F)</label>
                <input type="text" name="Gender" class="form-control" required>
            </div>
            <div class="form-groub">
                <label>Tanggal Lahir</label>
                <input type="date" name="TTL" class="form-control" required>
            </div>
            <button type="Submit" name="Submit" class="btn btn-success btn-sm mt-3">Tambah</button>
        </form>

       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>

<?php
if (isset($_POST['Submit'])) {
    $NIM = $_POST['NIM'];
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $Gender = $_POST['Gender'];
    $TTL = $_POST['TTL'];

    include_once("koneksi.php");

    $result = mysqli_query($con, "INSERT INTO mahasiswa(NIM,Nama,Alamat,Gender,TTL) VALUES('$NIM', '$Nama', '$Gender', '$Alamat', '$TTL')");

    echo "Data Berhasil di update. <a href='index.php'>View Mahasiswa</a>";
}
?>