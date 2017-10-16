<?php

  /**
  * 
  */
  class db{

    private $dbhost = "localhost";
    private $dbuser = "root";
    private $dbpass = "";
    private $dbname = "slimapp";

    public function getDbHost(){
      return $this->dbhost;
    }
    
    public function getDbUser(){
      return $this->dbuser;
    }
    public function getDbPass(){
      return $this->dbpass;
    }
    public function getDbName(){
      return $this->dbname;
    }


    public function connect(){
      $mysql_connect_str = "mysql:host=".$this->getDbHost().";dbname=".$this->getDbName();
      $dbConnection = new PDO($mysql_connect_str, $this->getDbUser(), $this->getDbPass());
      $dbConnection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      return  $dbConnection;
    }
  }

