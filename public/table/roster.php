<?php
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