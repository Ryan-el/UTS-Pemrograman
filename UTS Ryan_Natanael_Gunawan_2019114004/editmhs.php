<?php
$id = $_GET['kodedosen'];
include 'modelmhs.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Data Dosen</title>
</head>
<body>
<h1>Edit Data Dosen</h1>
<a href="indexmhs.php">Kembali</a><br><br>
<form action="prosesmhs.php" method="post">
<label>Kode Dosen</label><br>
<input type="text" name="kodedosen" value="<?php echo $data->kodedosen ?>"><br>
<label>NIDN</label><br>
<input type="text" name="nidn" value="<?php echo $data->nidn ?>"><br>
<label>NIPY</label><br>
<input type="text" name="nipy" value="<?php echo $data->nipy ?>"><br>
<label>Nama Dosen</label><br>
<input type="text" name="namadosen" value="<?php echo $data->namadosen ?>"><br>
<label>Kode Prodi</label><br>
<input type="number" name="kodeprodi" value="<?php echo $data->kodeprodi ?>"><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>
