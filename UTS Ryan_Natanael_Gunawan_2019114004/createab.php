<!doctype html>
<html lang="en">
<head>
<title>Tambah Data Absen</title>
</head>
<body>
<h1>Tambah</h1>
<a href="indexab.php">Kembali</a><br><br>
<form action="prosesab.php" method="post">
<label>ID Absen</label><br>
<input type="text" name="idabsen"><br>
<label>Tanggal Absen</label><br>
<input type="text" name="tglabsen"><br>
<label>Masuk</label><br>
<input type="number" name="masuk"><br>
<label>Keluar</label><br>
<input type="number" name="keluar"><br>
<label>Kode Dosen</label><br>
<input type="text" name="kodedosen"><br>
<label>Sesi</label><br>
<input type="text" name="sesi"><br>
<label>Kelas Sesi</label><br>
<input type="text" name="kelassesi"><br>
<br><br>
<button type="submit" name="submit_simpan">Submit</button>
<button type="reset">Reset</button>
</form>
</body>
</html>
