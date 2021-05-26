<?php
include 'modelmk.php';
if (isset($_POST['submit_simpan'])) {
$kodemk = $_POST['kodemk'];
$namamk = $_POST['namamk'];
$sks = $_POST['sks'];
$smt = $_POST['smt'];
$kodeprodi = $_POST['kodeprodi'];
$model = new Model();
$model->insert($kodemk, $namamk, $sks, $smt, $kodeprodi);
header ('location : indexmk.php');
}
if (isset($_POST['submit_edit'])) {
$kodemk = $_POST['kodemk'];
$namamk = $_POST['namamk'];
$sks = $_POST['sks'];
$smt = $_POST['smt'];
$kodeprodi = $_POST['kodeprodi'];
$model = new Model();
$model->update($kodemk, $namamk, $sks, $smt, $kodeprodi);
header ('location : indexmk.php');
}
if (isset($_GET['nim'])) {
 $id = $_GET['nim'];
 $model = new Model();
 $model->delete($id);
 header('location:indexmk.php');
}