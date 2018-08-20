<?php
namespace app\index\controller;
use think\Controller;
use think\Session;

class Index extends controller
{

	public function index(){
		if(Session::has('login_info')){
			// dump(Session::get('login_info'));
			$this->redirect('Base/index');
		}else{
			$this->redirect('login_form', ['login_id' =>time() ]);
		}
	}

	public function logout(){
		$this->redirect('login_form', ['login_id' =>2 ]);
	}

	public function login_form(){
		return $this->fetch('login');
	}

	public function logindo(){
		$user['mail'] 		= input('param.mail');
		$user['password'] = input('param.password');

		$menu     				= $this->menu();
		//
		$back_data   = [
			'menu' => $menu,
			'user' => [
				'uid'				=>'110',
				'nikename'	=>'兰纯钰',
				'mail'			=>'ny_lanchunyu@163.com',
				'phone'			=>'15285087689',
			],
		];
    session('login_info',$back_data);
		// dump($user);exit;

    $ajaxData['user']    = $user;
    $ajaxData['status']  = 1;
		return json_encode($ajaxData);
	}

	public function menu() {
		return [
			'workspace'			=> ['name'=>'我的工作台', 'action'=>'Index/index','icon'=>'fa-laptop'],
			'employee'			=> ['name'=>'员工管理', 'action'=>'Index/index','icon'=>'fa-user'],
			'organization'	=> ['name'=>'组织管理', 'action'=>'Index/index','icon'=>'fa-th'],
			'ecruit'				=> ['name'=>'招聘管理', 'action'=>'Index/index','icon'=>'fa-hand-grab-o'],
			'approval'			=> ['name'=>'审批', 'action'=>'Index/index','icon'=>'fa-check-square'],
			'attendance'		=> ['name'=>'考勤', 'action'=>'Index/index','icon'=>'fa-table'],
			'system'		=> ['name'=>'系统设置', 'action'=>'Index/index','icon'=>'fa-gear'],
		];
	}
    // public function index()
    // {
    //     return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    // }
}
