<?php
include 'model.php';
if (isset($_POST['submit_simpan'])) {
 $id = $_POST['id'];
 $jadwalid = $_POST['jadwalid'];
 $kodedosen = $_POST['kodedosen'];
 $hari = $_POST['hari'];
 $thnakademik = $_POST['thnakademik'];
 $semester = $_POST['semester'];
 $kodemk = $_POST['kodemk'];
 $sesi = $_POST['sesi'];
 $jammasuk = $_POST['jammasuk'];
 $jamkeluar = $_POST['jamkeluar'];
 $kelas = $_POST['kelas'];
 $ruang = $_POST['ruang'];
 $status = $_POST['status'];
 $kelassesi = $_POST['kelassesi'];
 $model = new Model();
 $model->insert($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
header ('location : indexx.php');
}
if (isset($_POST['submit_edit'])) {
    $id = $_POST['id'];
    $jadwalid = $_POST['jadwalid'];
    $kodedosen = $_POST['kodedosen'];
    $hari = $_POST['hari'];
    $thnakademik = $_POST['thnakademik'];
    $semester = $_POST['semester'];
    $kodemk = $_POST['kodemk'];
    $sesi = $_POST['sesi'];
    $jammasuk = $_POST['jammasuk'];
    $jamkeluar = $_POST['jamkeluar'];
    $kelas = $_POST['kelas'];
    $ruang = $_POST['ruang'];
    $status = $_POST['status'];
    $kelassesi = $_POST['kelassesi'];
 $model = new Model();
 $model->update($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi);
 header('location:indexx.php');
}
if (isset($_GET['nim'])) {
 $id = $_GET['nim'];
 $model = new Model();
 $model->delete($id);
 header('location:indexx.php');
}