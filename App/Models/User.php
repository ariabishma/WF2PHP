<?php
namespace App\Models;
use \App\Core\Database;

class User extends Database
{
  protected $table = "users";

  public function GetUser()
  {
    return Database::All()->Fetch();
  }
}


 ?>
