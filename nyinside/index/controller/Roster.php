<?php
namespace app\index\controller;
use app\index\controller\Base;

class Roster extends Base
{
  public function lists(){
    $this->set_page_name('list');
    return $this->fetch('Page:main');
  }

  public function set_page_name( $page_name = null ){
    return $page_name;
  }

  public function from_fileds(){
  	return [
  		['name'=>'姓名', 'key'=>'user', 'check'=>true, 'flag'=>'text'],
  		['name'=>'性别', 'key'=>'gender', 'flag'=>'text'],
  		['name'=>'手机号码', 'key'=>'phone', 'flag'=>'text'],
  		['name'=>'工作邮箱', 'key'=>'mail', 'flag'=>'text'],
  		['name'=>'证件类型', 'key'=>'gender', 'flag'=>'text'],
  		['name'=>'证件号码', 'key'=>'gender', 'flag'=>'text'],
  		['name'=>'部门', 'key'=>'gender', 'flag'=>'text'],
  		['name'=>'岗位', 'key'=>'gender', 'flag'=>'text'],
  		['name'=>'工作性质', 'key'=>'gender', 'flag'=>'text'],
  		['name'=>'入职日期', 'key'=>'gender', 'flag'=>'text','attr'=>['onclick'=>'laydate()']],
  		['name'=>'员工状态', 'key'=>'gender', 'flag'=>'text'],
  		['name'=>'试用期', 'key'=>'probation', 'flag'=>'list', 'list'=>$this->get_probation(),],
  		['name'=>'合同公司', 'key'=>'gender', 'flag'=>'text'],
  		['name'=>'工号', 'key'=>'gender', 'flag'=>'text'],
  	];
  }

  public function get_probation() {

    $ranges = array_combine($range = range(1, 6), array_map(function($item){return $item.'月';} , $range));
    array_unshift($ranges, '无试用期');
    // p($ranges);exit;
    return $ranges;
  }



}
