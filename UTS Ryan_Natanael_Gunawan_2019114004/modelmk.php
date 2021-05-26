<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($kodemk, $namamk, $sks, $smt, $kodeprodi)
{
 $sql = "INSERT INTO tbl_mk (kodemk, namamk, sks, smt, kodeprodi) VALUES
('$kodemk', '$namamk', '$sks', '$smt', '$kodeprodi)";
$this->conn->query($sql);
}

public function tampil_data()
{
 $sql = "SELECT * FROM tbl_mk";
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
 $sql = "SELECT * FROM tbl_mk WHERE kodemk='$id'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($kodemk, $namamk, $sks, $smt, $kodeprodi)
{
 $sql = "UPDATE tbl_mk SET kodemk='$kodemk', namamk='$namamk', sks='$sks', smt='$smt', kodeprodi='$kodeprodi
WHERE kodemk='$kodemk'";
 $this->conn->query($sql);
} 
public function delete($kodemk)
{
 $sql = "DELETE FROM tbl_mk WHERE kodemk='$kodemk'";
 $this->conn->query($sql);
}
}
