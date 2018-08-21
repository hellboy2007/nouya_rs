<?php
namespace app\index\controller;
use app\index\controller\Base;

class Center extends Base
{
  public function index(){
    return $this->fetch('Page:first');
  }

}
