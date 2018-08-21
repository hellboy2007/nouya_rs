<?php
/**
 * 功能：登录，错误显示，等默认操作
 */
namespace app\index\controller;
use think\Controller;
use think\Session;

class Index extends controller
{

	public function index(){
		if(Session::has('login_info')){
			// dump(Session::get('login_info'));
			$this->redirect('Center/index');
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
			'workspace'			=> [
				'name'=>'我的工作台', 'action'=>'Index/index','icon'=>'fa-laptop','subflag'=>false,
				'modules'=>['workspace','Index'],
			],
			'employee'			=> ['name'=>'员工管理', 'action'=>'#','icon'=>'fa-user','subflag'=>true,
				'modules'=>['employee','roster','relations','archive','statistics','reportform','dynamic','setting',],
													'subitems'=>[
														'roster'			=> ['name'=>'员工花名册', 'action'=>'roster/lists','icon'=>'fa-angle-right'],
														'relations'		=> ['name'=>'员工关系管理', 'action'=>'relations/enrollment','icon'=>'fa-angle-right'],
														'archive'			=> ['name'=>'档案库', 'action'=>'archive/status','icon'=>'fa-angle-right'],
														'statistics'	=> ['name'=>'统计分析', 'action'=>'statistics/overview','icon'=>'fa-angle-right'],
														'reportform'	=> ['name'=>'人事报表', 'action'=>'reportform/index','icon'=>'fa-angle-right'],
														'dynamic'			=> ['name'=>'人事动态', 'action'=>'dynamic/index','icon'=>'fa-angle-right'],
														'setting'			=> ['name'=>'基础设置', 'action'=>'setting/home','icon'=>'fa-angle-right'],
													],
		],
			'department'		=> ['name'=>'组织管理', 'action'=>'department/manage','icon'=>'fa-th', 'subflag'=>false,
			'modules'=>['department'],
		],
			'recruitment'		=> ['name'=>'招聘管理', 'action'=>'','icon'=>'fa-hand-grab-o', 'subflag'=>false,
			'modules'=>['recruitment'],
		],
			'approval'			=> ['name'=>'审批', 'action'=>'','icon'=>'fa-check-square', 'subflag'=>false,
			'modules'=>['approval'],
		],
			'attendance'		=> ['name'=>'考勤', 'action'=>'','icon'=>'fa-table', 'subflag'=>false,
			'modules'=>['attendance'],
		],
			'system'			  => ['name'=>'系统设置', 'action'=>'','icon'=>'fa-gear', 'subflag'=>false,
			'modules'=>['system'],
		],
		];
	}
    // public function index()
    // {
    //     return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ad_bd568ce7058a1091"></think>';
    // }
}
