<?php
/**
 * 功能：其它控制器的基础，以此为基础
 * 1.实现公共信息：
 *  菜单,
 *  用户登录信息：login_userinfo
 *  Request信息：module_name,controller_name,action_name,
 */
namespace app\index\controller;
use think\Controller;
use think\Session;
use think\Request;

class Base extends controller
{
  public function _initialize() {
    //取得请求的相关信息
    $request  = Request::instance();

    $ctl_name     = $request->controller();
    $act_name     = $request->action();
    $module_name  = $request->module();

    $base_reqest = [
      'ctl_name' => $ctl_name,
      'act_name' => $act_name,
      'mod_name' => $module_name,
    ];

    //登录信息，含菜单，从session中读取
    $login_info = Session::get('login_info');
    // echo "当前模块名称是" . $request->module();
    // echo "当前控制器名称是" . $request->controller();
    // echo "当前操作名称是" . $request->action();
    // p($login_info['menu']);
    // p($login_info['menu'][$reqest_info['ctl']]);
    // exit;

    //子菜单提取
    $sub_menu_key = null;
    $sub_menu     = null;
    foreach ($login_info['menu'] as $key => $md) {


      if(in_array(strtolower($ctl_name), $md['modules'])){
        $sub_menu_key = $key;
        break;
      }
    }



    if(!empty($login_info['menu'][$sub_menu_key]['subitems'])){
      $sub_menu = $login_info['menu'][$sub_menu_key]['subitems'];
    }


    $base_user    = $login_info['user'];
    $base_info    = [
      'menu'    => $login_info['menu'],
      'sub_menu'=> $sub_menu
    ];

    
    // p($sub_menu);
    // p($ctl_name);
    // exit;

    $this->assign('base_info',   $base_info);
    $this->assign('base_user',   $base_user);
    $this->assign('base_reqest', $base_reqest);
  }

}
