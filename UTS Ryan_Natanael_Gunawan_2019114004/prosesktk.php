<?php
include 'modelktk.php';
if (isset($_POST['submit_simpan'])) {
$kodeprodi = $_POST['kodeprodi'];
$namaprodi = $_POST['namaprodi'];$model = new Model();
 $model->insert($kodeprodi, $namaprodi);
header ('location : indexktk.php');
}
if (isset($_POST['submit_edit'])) {
    $kodeprodi = $_POST['kodeprodi'];
    $namaprodi = $_POST['namaprodi'];$model = new Model();
     $model->update($kodeprodi, $namaprodi);
    header ('location : indexktk.php');
}
if (isset($_GET['kodeprodi'])) {
 $id = $_GET['kodeprodi'];
 $model = new Model();
 $model->delete($id);
 header('location:indexktk.php');
}