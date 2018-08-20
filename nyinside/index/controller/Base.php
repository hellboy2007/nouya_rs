<?php
namespace app\index\controller;
use think\Controller;
use think\Session;

class Base extends controller
{
  public function _initialize() {
    $login_info = Session::get('login_info');
    $this->assign('menu',$login_info['menu']);
    // dump($login_info['menu']);exit;
    $this->assign('user_info',$login_info['user']);
  }

  public function index(){
    return $this->fetch('first');
  }
}
