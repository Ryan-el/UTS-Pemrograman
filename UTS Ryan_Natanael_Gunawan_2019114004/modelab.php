<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi)
{
  $status = $this->status($wkt_absen);
  $sql = "INSERT INTO tbl_ab (idabsen, tglabsen, masuk, keluar, kodedosen, sesi, kelassesi ) VALUES
('$idabsen', '$tglabsen', '$masuk', '$keluar', '$kodedosen', '$sesi', '$kelassesi')";
$this->conn->query($sql);
}
public function status($wkt_absen)
{
 $status="";
 if($wkt_absen <=8 && $wkt_absen =9){
 $status="Hadir";
}else{
 $status="Tidak Hadir";
}
 return $status;
}
public function tampil_data()
{
 $sql = "SELECT * FROM tbl_ab";
 $bind = $this->conn->query($sql);
 while  ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if(!empty($baris)){
 return $baris;
 }
}
public function edit($idabsen)
{
 $sql = "SELECT * FROM tbl_ab WHERE idabsen='$idabsen'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($idabsen, $tglabsen, $masuk, $keluar, $kodedosen, $sesi, $kelassesi)
{
$sql = "UPDATE tbl_ab SET idabsen='$idbsen', tglabsen='$tglabsen', masuk='$masuk', keluar='$keluar', kodedosen='$kodedosen', sesi='$sesi', kelassesi='$kelas'
WHERE idabsen='$idabsen'";
 $this->conn->query($sql);
}
public function delete($idabsen)
{
 $sql = "DELETE FROM tbl_ab WHERE idabsen='$idabsen'";
 $this->conn->query($sql);
}
}
