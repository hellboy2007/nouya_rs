<?php
namespace app\index\controller;
use think\Controller;
use think\Db;



class Tables extends controller
{

    public $singletb = NULL;

    public function _initialize($tb = NULL) {
        $this->singletb = null;//array('msg','shipment_list','sales','sales_list','buyer','buyer_list','buyer_list_actual','salestobuy',);
    }

    public function index() {
        $datas  = include(ROOT_PATH. '/table/tables.php'); 
  		$PREFIX ='';
        if(!empty($this->singletb)){
            foreach ($this->singletb as $key=>$item) {
                $data[$item] = $datas[$item];
            }
        }
        else{
            $data = $datas;
        }


        foreach ($data as $table) {
            $files_str = $this->files_transition($table['fileds']);
            $ALTER = '';
            if(!empty($table['ALTER'])){
                $ALTER = "ALTER TABLE `{$PREFIX}{$table['name']}` {$table['ALTER']}";
            }
            $table_str = "DROP TABLE IF EXISTS `{$PREFIX}{$table['name']}`;CREATE TABLE IF NOT EXISTS `{$PREFIX}{$table['name']}` (" .
                $files_str .
                ") ENGINE={$table['ENGINE']} AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COMMENT='{$table['COMMENT']}';{$ALTER}";

            $this->create_table($table_str);
        }

        p($data);exit;

    }

     /**
      * 组合数组表字段为可查询字符
      */
     public function files_transition($fileds){
        $filed_strs = '`id` int(10) NOT NULL AUTO_INCREMENT,';
        $default_arr = array('int','tinyint','date','datetime');
        foreach ($fileds as $filed) {
            $filed_str = '';
            $name=$type=$length=$default=$default_add=$comment='';
            foreach ($filed as $key=>$item) {

                switch ($key) {
                    case 'name':
                        $name = $item;
                        break;
                    case 'type':
                        $type = $item;
                        if(empty($fileds['DEFAULT']))$default = (in_array($item, $default_arr))? 'NOT NULL':'DEFAULT NULL';
                        break;
                    case 'length':
                        $length = empty($item)? '':"({$item})";
                        break;
                    case 'COMMENT':
                        $comment = "COMMENT '{$item}'";
                        break;
                    case 'DEFAULT':
                        $default_add = $item;
                        break;
                    default:
                        # code...
                        break;
                }

            }

            $filed_str.= "`{$name}` {$type}{$length} {$default}{$default_add} {$comment},";
            $filed_strs.=$filed_str;
        }

        return $filed_strs . 'PRIMARY KEY (`id`)';
     }

    public function create_table($sql){
    	//echo($sql);

        Db::execute($sql);
        //清空产品表的表行占用
        // $add_sql = 'update `pito_products` set pstocks=0';
        // $Model->execute($add_sql);

        // echo 'created tables complated';
    }

}