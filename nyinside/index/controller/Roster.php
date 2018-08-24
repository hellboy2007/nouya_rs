<?php
namespace app\index\controller;
use app\index\controller\Base;

class Roster extends Base
{
  public function lists(){
    return $this->fetch('Page:first');
  }

}
