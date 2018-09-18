<?php
return [
	'suggests'=>[
		'name'=>'suggests',
		'fileds'=>[
				['COMMENT' => '编号','name' =>'no','type' => 'varchar','length'=> '100'],
				['COMMENT' => '标题','name' =>'title','type' => 'varchar','length'=> '100'],
				['COMMENT' => '发布人no号','name' =>'publisher_no','type' => 'varchar','length'=> '100'],
				['COMMENT' => '意见类型id','name' =>'cate','type' => 'tinyint','length'=> '4'],
				['COMMENT' => '图像名称','name' =>'attac_name','type' => 'varchar','length'=> '100'],
				['COMMENT' => '图像路径','name' =>'attac_path','type' => 'varchar','length'=> '255'],
				['COMMENT' => '建议内容','name' =>'remark','type' => 'text','length'=> '255'],
				['COMMENT' => '积分','name' =>'score','type' => 'text','length'=> '100'],
				['COMMENT' => '记录创建时间','name' =>'created','type' => 'datetime','length'=> ''],
				['COMMENT' => '记录更新时间','name' =>'updated','type' => 'datetime','length'=> ''],
		],
		'PRIMARY KEY'=>'id',
		'ENGINE'=>'MyISAM',
		'AUTO_INCREMENT'=>0,
		'DEFAULT CHARSET'=>'utf8',
		'COMMENT'=>'意见记录表',
		'ALTER'=>'ADD UNIQUE KEY no (no);',
	],

	//礼品表
	'gifts'=>[
		'name'=>'gifts',
		'fileds'=>[
				['COMMENT' => '礼品编号','name' =>'no','type' => 'varchar','length'=> '100'],
				['COMMENT' => '礼品名称','name' =>'title','type' => 'varchar','length'=> '100'],
				['COMMENT' => '礼品描述','name' =>'remark','type' => 'text','length'=> '255'],
				['COMMENT' => '要求积分','name' =>'score','type' => 'varchar','length'=> '100'],
				['COMMENT' => '礼品状态1.上架,2下架','name' =>'store_status','type' => 'tinyint','length'=> '4','DEFAULT'=>' DEFAULT 1'],
				['COMMENT' => '记录创建时间','name' =>'created','type' => 'date','length'=> ''],
				['COMMENT' => '记录更新时间','name' =>'updated','type' => 'date','length'=> ''],
		],
		'PRIMARY KEY'=>'id',
		'ENGINE'=>'MyISAM',
		'AUTO_INCREMENT'=>0,
		'DEFAULT CHARSET'=>'utf8',
		'COMMENT'=>'礼品表',
	],




];
