<!doctype html>
<html lang="en">
<head>
<title>Tambah Data Matakuliah</title>
</head>
<body>
<h1>Tambah</h1>
<a href="indexmk.php">Kembali</a><br><br>
<form action="prosesmk.php" method="post">
<label>Kode MK</label><br>
<input type="text" name="kodemk"><br>
<label>Nama MK</label><br>
<input type="text" name="namamk"><br>
<label>SKS</label><br>
<input type="number" name="sks"><br>
<label>Semester</label><br>
<input type="number" name="smt"><br>
<label>Kode Prodi</label><br>
<input type="text" name="kodeprodi"><br>
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>
</html>
