<?php
  class DBAccess
  {

    /*Cualquier duda me informan.................. */
    
    private $conn;
    private $host = "software-if.mysql.database.azure.com";
    private $user = "meister@software-if";
    private $password = "@sd12345678";
    private $dbname = "farmacia";

    public function __CONSTRUCT()
    {
      try {
        $this->conn = new PDO("mysql:host=software-if.mysql.database.azure.com;dbname=farmacia", "meister@software-if", "@sd12345678");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e ) {
        echo "DBAcess error: " .$e->getMessage();
      }
  }

    public function get_connection()
    {
      return $this->conn;
    }
  }
?>
