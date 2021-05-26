<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }

public function insert($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
{
 $sql = "INSERT INTO tbljadwal (id, jadwalid, kodedosen, hari, thnakademik, semester, kodemk, sesi, jammasuk, jamkeluar, kelas, ruang, status, kelassesi) VALUES
('$id', '$jadwalid', '$kodedosen', '$hari', '$thnakademik', '$semester', '$kodemk', '$sesi', '$jammasuk', '$jamkeluar', '$kelas', '$ruang', '$status', '$kelassesi')";
$this->conn->query($sql);
}


public function tampil_data()
{
 $sql = "SELECT * FROM tbljadwal";
 $bind = $this->conn->query($sql);
 while  ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if(!empty($baris)){
 return $baris;
 }
}
public function edit($id)
{
 $sql = "SELECT * FROM tbljadwal WHERE id='$id'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($id, $jadwalid, $kodedosen, $hari, $thnakademik, $semester, $kodemk, $sesi, $jammasuk, $jamkeluar, $kelas, $ruang, $status, $kelassesi)
{
 $sql = "UPDATE tbljadwal SET id='$id', jadwalid='$jadwalid', kodedosen='$kodedosen', hari='$hari', thnakademik='$thnakademik', semester='$semester', kodemk='$kodemk', sesi='$sesi', jammasuk='$jammasuk', jamkeluar='$jamkeluar', kelas='$kelas', ruang='$ruang', status='$status', kelassesi='$kelassesi'
 WHERE id='$id'";
 $this->conn->query($sql);
}
public function delete($id)
{
 $sql = "DELETE FROM tbljadwal WHERE id='$id'";
 $this->conn->query($sql);
}
}
