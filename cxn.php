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
        // $this.setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->cxn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
      catch (PDOException $e) {
        echo "Error ".$e;
      } 
    }

    public function actionsSQL($qry){//insert//delete//update
      $this->cxn->exec($qry);
      return $this->cxn->lastInsertId();
    }

    public function selectSQL($qry){
      $select = $this->cxn->prepare($qry);
      $select->execute();
      return $select->fetchAll();
    }

    public function deleteSQL($qry){
      $delete = $this->cxn->prepare($qry);
      $delete->execute();
      $this->selectSQL("SELECT * FROM `fotos` WHERE marca_borrado != 'X';");
    }

    public function closeCxn(){
      unset(self::$cxn);
    }

  }
?>