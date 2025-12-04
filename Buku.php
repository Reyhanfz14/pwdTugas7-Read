<?php
require_once "Database.php";

class Buku extends Database {

    public function getAllData() {
        $sql = "SELECT * FROM buku";
        $result = $this->conn->query($sql);
        return $result;
    }
}
?>
