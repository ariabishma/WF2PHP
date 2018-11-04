<?php
use App\Core\Controllers;
class AboutControllers extends Controllers
{
  public function index()
  {
    $id = $this->GetParam('id');
    return $this->View('About.wf2');
  }
}

?>
