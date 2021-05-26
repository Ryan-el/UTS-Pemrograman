<?php
include 'modelab.php';
if (isset($_POST['submit_simpan'])) {
 $idabsen = $_POST['idabsen'];
 $tglabsen = $_POST['tglabsen'];
 $masuk = $_POST['masuk'];
 $keluar = $_POST['keluar'];
 $kodedosen = $_POST['kodedosen'];
 $sesi = $_POST['sesi'];
 $kodesesi = $_POST['kodesesi'];
 $model = new Model();
 $model->insert($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi);
header ('location : indexab.php');
}
if (isset($_POST['submit_edit'])) {
    $idabsen = $_POST['idabsen'];
    $tglabsen = $_POST['tglabsen'];
    $masuk = $_POST['masuk'];
    $keluar = $_POST['keluar'];
    $kodedosen = $_POST['kodedosen'];
    $sesi = $_POST['sesi'];
    $kodesesi = $_POST['kodesesi'];
    $model = new Model();
    $model->update($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi);
   header ('location : indexab.php');
}
if (isset($_GET['idabsen'])) {
 $id = $_GET['ideabsen'];
 $model = new Model();
 $model->delete($id);
 header('location:indexab.php');
}