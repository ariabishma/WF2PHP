<?php
namespace App\Core;
/**
 * Controllers Core Class
 */
class Controllers
{
  private $ContKey;
  private $Params;
   function __construct($value='')
  {
    $this->ContKey = $value;
    return $this->SetParams();
  }

  private function SetParams()
  {
    $_uri = \Routes::GetUri();

    $ContKey = explode('/',$this->ContKey);
    $_uri = explode('/',$_uri);
    $i=0;
    foreach ($ContKey as  $value) {
      $pattern = '#{(.*)}#';
      $match = preg_replace($pattern,'$1',$value);
      if (preg_match($pattern,$value)) {
        $this->Params[$match] = $_uri[$i];
      }
      $i++;
    }

  }

  public function View($page,$data=[])
  {
    foreach ($data as $key => $value) {
      ${$key} = $value;
    }
    include __DIR__.'/../View/'.$page.'.php';
  }

  public function GetParam($key = null)
  {
    if (is_null($key)) {
      return $this->Params;
    }else {
      return $this->Params[$key];
    }
  }
}
 ?>
