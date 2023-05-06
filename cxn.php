<?php
  class cxn{
    private $server = "localhost";
    private $dbName = "test";
    private $user   = "root";
    private $pass   = "";
    private $cxn;

    public function __construct() {
      try {
        $this->cxn = new PDO("mysql:host=$this->server;dbname=$this->dbName", $this->user, $this->pass);
        $this.setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch (PDOException $e) {
        echo "Error ".$e;
      } 
    }

    public function loadSQL($qry){
      $this->cxn->exec($qry);
      return $this->cxn->lastInsertId();
    }

    public function selectSQL($qry){
      $this->cxn->exec($qry);
      return $this->cxn->selectAll();
    }

  }
?>