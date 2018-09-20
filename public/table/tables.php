<?php
return [
	'roster'=>[
		'name'=>'roster',
		'fileds'=>[
				['COMMENT' => '姓名', 'name' =>'user', 'type' => 'varchar', 'length'=> '100'],
				['COMMENT' => '性别', 'name' =>'gender','type' => 'tinyint','length'=> '4'],
				['COMMENT' => '手机号码','name' =>'phone','type' => 'varchar','length'=> '30'],
				['COMMENT' => '工作邮箱','name' =>'mail','type' => 'varchar','length'=> '100'],
				['COMMENT' => '证件类型','name' =>'papers','type' => 'tinyint','length'=> '4'],
				['COMMENT' => '证件号码','name' =>'pp_no','type' => 'varchar','length'=> '100'],
				['COMMENT' => '部门','name' =>'department','type' => 'varchar','length'=> '100'],
				['COMMENT' => '岗位','name' =>'posi','type' => 'varchar','length'=> '100'],
				['COMMENT' => '工作性质','name' =>'nature','type' => 'tinyint','length'=> '4'],
				['COMMENT' => '入职日期','name' =>'indated','type' => 'date','length'=> ''],
				['COMMENT' => '入职状态','name' =>'pos_status','type' => 'tinyint','length'=> '4'],
				['COMMENT' => '试用期','name' =>'probation','type' => 'varchar','length'=> '100'],
				['COMMENT' => '合同公司','name' =>'cont_company','type' => 'varchar','length'=> '100'],
				['COMMENT' => '工号','name' =>'no','type' => 'varchar','length'=> '100'],
				['COMMENT' => '记录创建时间','name' =>'created','type' => 'datetime','length'=> ''],
				['COMMENT' => '记录更新时间','name' =>'updated','type' => 'datetime','length'=> ''],
		],
		'PRIMARY KEY'=>'id',
		'ENGINE'=>'MyISAM',
		'AUTO_INCREMENT'=>0,
		'DEFAULT CHARSET'=>'utf8',
		'COMMENT'=>'花名册',
		'ALTER'=>'ADD UNIQUE KEY no (no);',
	],



];
