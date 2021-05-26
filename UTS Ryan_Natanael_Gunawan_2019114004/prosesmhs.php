<?php
include 'modelmhs.php';
if (isset($_POST['submit_simpan'])) {
 $kodedosen = $_POST['kodedosen'];
 $nidn = $_POST['nidn'];
 $nipy = $_POST['nipy'];
 $namadosen = $_POST['namadosen'];
 $kodeprodi = $_POST['kodeprodi'];
 $model = new Model();
 $model->insert($kodedosen, $nidn, $nipy, $namadosen, $kodeprodi);
header ('location : indexmhs.php');
}
if (isset($_POST['submit_edit'])) {
    $kodedosen = $_POST['kodedosen'];
    $nidn = $_POST['nidn'];
    $nipy = $_POST['nipy'];
    $namadosen = $_POST['namadosen'];
    $kodeprodi = $_POST['kodeprodi'];
    $model = new Model();
    $model->update($kodedosen, $nidn, $nipy, $namadosen, $kodeprodi);
   header ('location : indexmhs.php');
}
if (isset($_GET['kodedosen'])) {
 $id = $_GET['kodedosen'];
 $model = new Model();
 $model->delete($id);
 header('location:indexmhs.php');
}