<?php
//membuat class database
class database {
    // property
    private $dbHost = "localhost";
    private $dbUser = "root";
    private $dbPass = "2014150136";
    private $dbName = "freda";

    // method koneksi MySQL
    public function connect() {
        mysql_connect($this->dbHost, $this->dbUser, $this->dbPass) or die("Koneksi MySQL Gagal. " .mysql_error());
        mysql_select_db($this->dbName) or die ("Koneksi Database Gagal. " .mysql_error());
    }
}
?>