<?php
include 'connection.php';
class Model extends Connection
{
public function __construct()
 {
 $this->conn = $this->get_connection();
 }
 
public function insert($kodedosen, $nidn, $nipy, $namadosen, $kodeprodi)
{
 $sql = "INSERT INTO tbl_mhs (kodedosen, nidn, nipy, namadosen, kodeprodi) VALUES
('$kodedosen', '$nidn', '$nipy', '$namadosen', '$kodeprodi')";
$this->conn->query($sql);
}

public function tampil_data()
{
 $sql = "SELECT * FROM tbl_mhs";
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
 $sql = "SELECT * FROM tbl_mhs WHERE kodedosen='$id'";
 $bind = $this->conn->query($sql);
 while ($obj = $bind->fetch_object()) {
 $baris = $obj;
 }
 return $baris;
}
public function update($kodedosen, $nidn, $nipy, $namadosen, $kodeprodi)
{
 $sql = "UPDATE tbl_mhs SET kodedosen='$kodedosen', nidn='$nidn', nipy='$nipy', kodeprodi='$kodeprodi'
WHERE kodedosen='$kodedosen'";
 $this->conn->query($sql);
} 
public function delete($kodedosen)
{
 $sql = "DELETE FROM tbl_mhs WHERE kodedosen='$kodedosen'";
 $this->conn->query($sql);
}
}
