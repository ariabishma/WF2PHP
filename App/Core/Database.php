<?php
namespace App\Core;

use \PDO;
class Database
{
  private $dbh;
  private $stmt;

  function __construct()
  {
    $this->dbh = new PDO('mysql:host=localhost;dbname=wf2',"root","");
  }
  public function All()
  {
    return $this->q("SELECT * FROM $this->table");
  }
  public function q($q)
  {
    $this->stmt = $this->dbh->prepare($q);
    $this->stmt->execute();
    return $this;
  }
  public function Fetch()
  {
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }
  public function FetchAll()
  {
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }
}
 ?>
