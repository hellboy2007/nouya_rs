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
use think\Db;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;


class Base extends controller
{
  public function _initialize() {
    //取得请求的相关信息
    $request  = Request::instance();

    $ctl_name     = strtolower($request->controller());
    $act_name     = $request->action();
    $module_name  = $request->module();

    $base_reqest = [
      'ctl_name' => $ctl_name,
      'act_name' => $act_name,
      'mod_name' => $module_name,
    ];

    //登录信息，含菜单，从session中读取
    $login_info = Session::get('login_info');

    //子菜单提取
    $mdu_key  = null;
    $mdu      = null;
    $ctl      = null;
    $sub_menu = null;

    //迭代菜单查看当前控制器所属模块
    foreach ($login_info['menu'] as $key => $md) {
      if(in_array(strtolower($ctl_name), $md['modules'])){
        $mdu_key = $key;
        break;
      }
    }

    if(!empty($login_info['menu'][$mdu_key]['subflag'])){
      $mdu = $login_info['menu'][$mdu_key];
      $sub_menu = $login_info['menu'][$mdu_key]['subitems'];
// p($ctl_name);exit;
      $ctl = $login_info['menu'][$mdu_key]['subitems'][$ctl_name];
    }

    // p($sub_menu);exit;
    $base_user    = $login_info['user'];
    $base_info    = [
      'menu'      => $login_info['menu'],
      'sub_menu'  => $sub_menu,
      'mdu'       => $mdu,
      'mdu_key'       => $mdu_key,
      'ctl'       => $ctl
    ];

  

    $this->set_page_name();

    $this->assign('base_info',   $base_info);
    $this->assign('base_user',   $base_user);
    $this->assign('base_reqest', $base_reqest);
  }

  public function set_page_name( $page_name = null ){
    $pagegroup  = $this->workframe();
    $pg_wb      = empty($pagegroup[$page_name])? null : $pagegroup[$page_name];

    $this->assign('pagegroup',   $pg_wb);
    $this->assign('page_name',   $page_name);
  }


  public function workframe() {
      return [
        'list'    => ['nav_btns','list_header','list_body','list_footer',],
        // 'list'    => ['nav_btns','search','list_header','list_body','list_footer',],
        'edit'    => ['edit_form'],
        'add'     => ['add_form'],
        'detail'  => ['detail'],
        'cmplate' => ['cmplate'],
        'upfile'  => ['upfile'],
      ];
  }

  //添加数据表单
  public function add_form() {



    $this->set_page_name('add');


    //fileds_group
    $fileds  = $this->fileds_group();


    $this->assign('form_fileds',   $fileds);
    return $this->fetch('Page:main');
  }

  public function add() {
    $request  = Request::instance();
    $data = $request->post();

    //取得字段
    $fileds   = $this->from_fileds();

    //进行筛选
    foreach($fileds as $fd) { 
      //文件上传类型的特殊处理
      //
      //
      //
      //一般文本框处理
      $fileds_arr[$fd['key']] = $data[$fd['key']];
    }


    $bf = $this->baseinfo();
    Db::name($bf['table'])->insert($fileds_arr);
    $Id =  Db::name($bf['table'])->getLastInsID();
    $this->redirect('cmplate', ['id' => $Id]);
  }

  public function cmplate() {

    $this->set_page_name('cmplate');
    return $this->fetch('Page:main');


  }

  public function baseinfo(){
    return [
          'table'=> 'roster',
    ];
  }


  public function fileds_group(){
  //排 列：平均分组 默认
  //排 列：自由分组
    $fileds = $this->from_fileds();

    $back_arr= null;
    $clo     = 2; 
    if(!empty($fileds)){
      $back_arr = array_chunk($fileds, $clo);
    }
  
    return $back_arr;
  }

  public function from_fileds() {
    return [];
  }
}
