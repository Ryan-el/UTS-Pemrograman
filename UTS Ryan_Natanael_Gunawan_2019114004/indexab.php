<?php
include 'modelab.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">
<head>
<title>Data Absen Mahasiswa</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<div>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><b>Pemrograman Internet</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="indexmhs.php">Dosen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indexx.php">Jadwal</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="indexab.php">Absen</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indexmk.php">Matakuliah</a>
      </li> <li class="nav-item">
        <a class="nav-link" href="indexktk.php">Prodi</a>
      </li>
    </ul>
    </form>
  </div>
</nav>
<h1>Data Absen Mahasiswa</h1>
<a href="createab.php">Tambah Data</a>
<br>
<a href="printab.php" target="_blank">Cetak Data</a>
<br><br>
<table border="1">
<thead>
<tr>
<th>No.</th>
<th>ID Absen</th>
<th>Tanggal Absen</th>
<th>Masuk</th>
<th>Keluar</th>
<th>kodedosen</th>
<th>sesi</th>
<th>kelassesi</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$result = $model->tampil_data();
if ( !empty($result) ) {
foreach ($result as $data): ?>
<tr>
<td><?=$index++ ?></td>
<td><?=$data->idabsen ?></td>
<td><?=$data->tglabsen ?></td>
<td><?=$data->masuk ?></td>
<td><?=$data->keluar ?></td>
<td><?=$data->kodedosen ?></td>
<td><?=$data->sesi ?></td>
<td><?=$data->kelassesi ?></td>
<td>
<a name="edit" id="edit"
href="editab.php?idabsen=<?=$data->idabsen ?>">Edit</a>
<a name="hapus" id="hapus"
href="prosesab.php?idabsen=<?=$data->idabsen ?>">Delete</a>
</td>
</tr>
<?php endforeach;
} else{ ?>
<tr>
<td colspan="9">Belum ada data pada tabel absen
mahasiswa.</td>
</tr>
<?php } ?>
</tbody>
</table>
</div>
</body>
</html>