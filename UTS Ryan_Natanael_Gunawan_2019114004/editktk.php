<?php
$id = $_GET['idabsen'];
include 'modelktk.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit  Data Prodi</title>
</head>
<body>
<h1>Edit Data Prodi</h1>
<a href="indexktk.php">Kembali</a><br><br>
<form action="prosesktk.php" method="post">
<label>Kode Prodi</label><br>
<input type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>"><br>
<label>Nama Prodi</label><br>
<input type="text" name="namaprodi" value="<?php echo $data->namaprodi ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>