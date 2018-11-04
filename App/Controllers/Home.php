<?php
use App\Core\Controllers;
use App\Models\User;

class Home extends Controllers
{
  public function index()
  {
    return $this->View('Home.clf',['nama'=>'bishma']);
  }
  public function test()
  {
    $db = new User;
    return $this->View('Home.clf',['nama'=>$db->GetUser()]);
  }
}
?>
