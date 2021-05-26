<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($kodeprodi, $namaprodi)
{
 $sql = "INSERT INTO tblprodi (kodeprodi, namaprodi ) VALUES
('$kodeprodi', '$namaprodi')";
$this->conn->query($sql);
}

public function tampil_data()
{
 $sql = "SELECT * FROM tblprodi";
 $bind = $this->conn->query($sql);
 while  ($obj = $bind->fetch_object()) {
 $baris[] = $obj;
 }
 if(!empty($baris)){
 return $baris;
 }
}
public function edit($kodeprodi)
{
 $sql = "SELECT * FROM tblprodi WHERE kodeprodi='$kodeprodi'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($kodeprodi, $namaprodi)
{
 $sql = "UPDATE tblprodi SET kodeprodi='$kodeprodi', namaprodi='$namaprodi'
WHERE kodeprodi='$kodeprodi'";
 $this->conn->query($sql);
} 
public function delete($kodeprodi)
{
 $sql = "DELETE FROM tblprodi WHERE kodeprodi='$kodeprodi'";
 $this->conn->query($sql);
}
}
