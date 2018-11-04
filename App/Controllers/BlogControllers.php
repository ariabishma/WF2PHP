<?php
use App\Core\Controllers;
class BlogControllers extends Controllers
{
  public function index()
  {
    $id = $this->GetParam();
    return $this->View('blog.clf',['data'=>$id['name']]);
  }
}

?>
