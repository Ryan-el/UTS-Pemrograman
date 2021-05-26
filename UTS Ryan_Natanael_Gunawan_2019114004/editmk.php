<?php
$id = $_GET['kodemk'];
include 'modelmk.php';
$model = new Model();
$data = $model->edit($id);
?>
<!doctype html>
<html lang="en">
<head>
<title>Edit Matakuliah</title>
</head>
<body>
<h1>Edit Matakuliah</h1>
<a href="indexmk.php">Kembali</a><br><br>
<form action="prosesmk.php" method="post">
<label>Kode MK</label><br>
<input type="text" name="kodemk" value="<?php echo $data->nim ?>"><br>
<label>Nama MK</label><br>
<input type="text" name="namamk" value="<?php echo $data->namamk ?>"><br>
<label>SKS MK</label><br>
<input type="text" name="sks" value="<?php echo $data->sks ?>"><br>
<label>Semester</label><br>
<input type="text" name="smt" value="<?php echo $data->smt ?>"><br>
<label>Kode Prodi</label><br>
<input type="text" name="kodeprodi" value="<?php echo $data->kodeprodi ?>"><br>
<br><br>
<button type="submit" name="submit_edit">Submit</button>
</form>
</body>
</html>