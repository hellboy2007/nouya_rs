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
  		['key'=>'user', 'check'=>true, 'flag'=>'text', 'attr'=>['name'=>'姓名'],],
  		['key'=>'gender', 'flag'=>'radios', 'list'=>$this->get_gender(), 'attr'=>['name'=>'性别'],],
  		['key'=>'phone', 'flag'=>'text', 'attr'=>['name'=>'手机号码'],],
  		['key'=>'mail', 'flag'=>'text', 'attr'=>['name'=>'工作邮箱'],],
  		['key'=>'papers', 'flag'=>'list', 'attr'=>['name'=>'证件类型'], 'list'=>$this->get_papers()],
  		['key'=>'pp_no', 'flag'=>'text', 'attr'=>['name'=>'证件号码'],],
  		['key'=>'department', 'flag'=>'text', 'attr'=>['name'=>'部门'],],
  		['key'=>'posi', 'flag'=>'text', 'attr'=>['name'=>'岗位'],],
  		['key'=>'nature', 'flag'=>'list', 'attr'=>['name'=>'工作性质'], 'list'=>$this->get_nature()],
  		['key'=>'indated', 'flag'=>'text', 'attr'=>['onclick'=>'laydate()','name'=>'入职日期']],
  		['key'=>'pos_status', 'flag'=>'list', 'attr'=>['name'=>'入职状态'], 'list'=>$this->get_pos_status()],
  		['key'=>'probation', 'flag'=>'list', 'list'=>$this->get_probation(), 'attr'=>['name'=>'试用期'],],
  		['key'=>'cont_company', 'flag'=>'text', 'attr'=>['name'=>'合同公司'],],
  		['key'=>'no', 'flag'=>'text', 'attr'=>['name'=>'工号'],],
  	];
  }

  public function get_probation() {

    $ranges = array_combine($range = range(1, 6), array_map(function($item){return $item.'月';} , $range));
    array_unshift($ranges, '无试用期');

    return $ranges;
  }

  public function get_gender(){
    return [1=>'男', 2=>'女' ];
  }

  public function get_pos_status(){
    return [1=>'试用', 2=>'正式' ];
  }

  public function get_nature(){
    return [1=>'全职', 2=>'兼职', 3=>'实习', 4=>'退休返聘', 5=>'劳务派遣', 6=>'劳务外包' ];
  }



  public function get_papers(){
    return [1=>'身份证', 2=>'港澳居民来往内地通行证', 3=>'台湾居民来往大陆通行证' , 4=>'外国护照' , 5=>'其他' ];
  }

}
