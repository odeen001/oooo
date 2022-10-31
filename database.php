database.php
<?php

class Database{
    public $conn;
    private $rs;

    public function __construct($host,$user,$pass,$dbname){
        $this->conn = mysqli_connect($host,$user,$pass,$dbname);
        //mysqli_query($this->conn,"SET NAMES UTF8");
    }
    public function query($strsql){
        $this->rs = mysqli_query($this->conn,$strsql);
    }
    public function numrow(){
        return mysqli_num_rows($this->rs);
    }
    public function fetch_array(){
        return mysqli_fetch_array($this->rs);
    }
}
