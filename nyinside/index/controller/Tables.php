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
            $drap = "DROP TABLE IF EXISTS `{$PREFIX}{$table['name']}`;";
            $table_str = "CREATE TABLE `{$PREFIX}{$table['name']}` (" .
                $files_str .
                ") ENGINE={$table['ENGINE']} AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COMMENT='{$table['COMMENT']}';";

            $this->create_table($drap, $table_str, $ALTER);
        }

        //p($data);exit;

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

    public function create_table($drap, $sql, $ALTER){

        Db::execute($drap);

        Db::execute($sql);

        if(!empty($ALTER))Db::execute($ALTER);

        echo "created tables ok~";
    }

}