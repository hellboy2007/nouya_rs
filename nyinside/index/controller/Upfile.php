<?php
namespace app\index\controller;
use app\index\controller\Base;
use \think\PHPExcel;

class Upfile extends Base {
	public function index() {
		$this->set_page_name('upfile');

		return $this->fetch('Page:main');
	}


	public function readexcel() {
      // import("think.PHPExcel");
       $objPHPExcel = new PHPExcel();
        $objSheet = $objPHPExcel->getActiveSheet(0);
        $objSheet->setTitle('出库表');//设置sheet标题
       // $t = new PHPExcel();
     
        // $cexcel = new Spreadsheet;
	}

	public function upload(){
    	// 获取表单上传文件 例如上传了001.jpg
    	$file = request()->file('excel');
    
    	// 移动到框架应用根目录/public/uploads/ 目录下
	    if($file){
	    	
	    	$savepath = ROOT_PATH . DS . 'uploads';
	        $info = $file->move($savepath);
	        if($info){
	        	$filepath = $info->getSaveName();
	            // 成功上传后 获取上传信息
	            // 输出 jpg
	            echo $info->getExtension();
	            echo '<br />';
	            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
	            echo $filepath;
	            echo '<br />';
	            // 输出 42a79759f284b767dfcb2a0197904287.jpg
	            echo $info->getFilename(); 

	    		$this->readexcel($savepath. DS . $filepath);

	        }else{
	            // 上传失败获取错误信息
	            echo $file->getError();
	        }
	    }
	}

}

