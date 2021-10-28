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
        <h1>Data Mahasiswa</h1>
        <a href="tambah.php" class="btn btn-success btn-sm m-2">Tambah Data</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>GENDER</th>
                    <th>ALAMAT</th>
                    <th>TANGGAL LAHIR</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <body>
                <?php while ($user_data = mysqli_fetch_array($result)){?>
                <tr>
                    <td><?= $user_data['NIM']; ?></td>
                    <td><?= $user_data['Nama']; ?></td>
                    <td><?= $user_data['Gender']; ?></td>
                    <td><?= $user_data['Alamat']; ?></td>
                    <td><?= $user_data['TTL']; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $user_data['NIM'] ?>" class= "btn btn-warning btn-sm">UPDATE</a>
                        <a href="delete.php?id=<?=$user_data['NIM']?>" class="btn btn-denger btn-sm">DELETE</a>
                    </td>
                </tr>
                <?php  } ?>
            </body>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>