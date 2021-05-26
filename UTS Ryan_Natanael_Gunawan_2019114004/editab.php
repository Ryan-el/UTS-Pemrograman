<?php
$id = $_GET['idabsen'];
include 'modelab.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Absen Mahasiswa</title>
</head>
<body>
<h1>Edit Absen Mahasiswa</h1>
<a href="indexab.php">Kembali</a><br><br>
<form action="prosesab.php" method="post">
<label>ID Absen</label><br>
<input type="text" name="idabsen" value="<?php echo $data->idabsen ?>"><br>
<label>Tanggal Absen</label><br>
<input type="text" name="tglabsen" value="<?php echo $data->tglabsen ?>"><br>
<label>Masuk</label><br>
<input type="number" name="masuk" value="<?php echo $data->masuk ?>"><br>
<label>Keluar</label><br>
<input type="number" name="keluar" value="<?php echo $data->keluar ?>"><br>
<label>Kode Dosen</label><br>
<input type="text" name="kodedosen" value="<?php echo $data->kodedosen ?>"><br>
<label>Sesi</label><br>
<input type="text" name="sesi" value="<?php echo $data->sesi ?>"><br>
<label>Kelas Sesi</label><br>
<input type="text" name="kelassesi" value="<?php echo $data->kelassesi ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>