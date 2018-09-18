<?php
namespace think\form;

class FormMake
{
        var $layout = true;	//脢脟路帽脢鹿脫脙卤铆赂帽虏录戮脰

        var $action;		//卤铆碌楼脪陋脤谩陆禄碌陆碌脛URL
                                                                
        var $method;
                                                                
        var $enctype="";
                                                                
        var $name="";
                                                                
        var $id="";
                                                                
        var $class="";
                                                                
                                                                       
        function form($action,$method="POST"){   //脥篓鹿媒鹿鹿脭矛潞炉脢媒鲁玫脢录禄炉鲁脡脭卤卤盲脕驴
                                                                
                $this->action=$action;
                                                                
                $this->method=$method;
                                                                
        }
                                                                
                                                                       
        function form_start(){
                                                                
                $text="<form action=\"{$this->action}\" method=\"{$this->method}\"";
                                                                
                if($this->class!==""){
                                                                
                        $text.=" class=\"{$this->class}\"";
                                                                
                }
                                                                
                if ($this->enctype!=="") {
                                                                
                        $text.=" enctype=\"{$this->enctype}\"";
                                                                
                }
                                                                
                if($this->id!==""){
                                                                
                        $text.=" id=\"{$this->id}\"";
                                                                
                }
                                                                
                if($this->name!==""){
                                                                
                        $text.=" name=\"{$this->name}\"";
                                                                
                }
                                                                
                $text.=">\n";
                                                                
                if($this->layout==true){
                                                                
                        $text.="<table>\n";
                                                                
                }
                                                                
                return $text;
                                                                
        }
                                                                
                                                                       
        function form_end(){
                                                                
                if ($this->layout==true) {
                                                                
                        $text="\t</table>\n";
                                                                
                        $text.="</form>\n";
                                                                
                }else {
                                                                
                        $text="</form>\n";
                                                                
                }
                                                                
                return $text;
                                                                
        }

        public function get_form_item($items, $value=null){
                $attr = empty($items['attr'])? null : $items['attr'];
                switch ($items['flag']) {
                        case 'text':
                                echo $this->form_text($items['key'], $value , $attr);
                                break;
                        case 'password':
                                echo $this->form_text($items, $value);
                                break;        
                        case 'textarea':
                                echo $this->form_textarea($items, $value);
                                break;
                        case 'list':
                                echo $this->form_select($items['key'], $value, $items['list'], $attr);
                                break;
                        case 'radios':
                                echo $this->form_radios($items['key'], $value, $items['list'], $attr);
                                break;
                        case 'button':
                                echo $this->form_button($key, $value, $attr);
                                break;
                        case 'input-group':
                                echo $this->form_input_group($items, $value);
                                break;
                        default:
                                # code...
                                break;
                }
        }


        public function form_input_group($fi, $value){
            if($fi['view']['group']['flag'] == 1) {
                $fi['view']['flag'] = 'text';

                if($fi['view']['group']['type']=='select')$text = $this->form_select($fi, $value);
                
                $html = '<div class="input-group">
                          ' . $text . '
                          <span class="input-group-btn">
                            <a class="btn btn-default" target="_blank" type="button" href=' . $fi['view']['group']['url'] .'>
                              + ...
                            </a>
                          </span>
                        </div>';
            }
            return $html;
        }


        public function get_attributes($attr) {
            $backstr = '';
            foreach ($attr as $key => $value) {
                $backstr.="{$key}=\"{$value}\"";
            }
            return $backstr;
        }
                                                                
        //脦脛卤戮驴貌潞炉脢媒                                                   
        function form_text($key, $value, $attr){
                $id            = $key;                                                
                $name          = $attr['name'];     
                                                
                $more          = $this->get_attributes($attr);    

                $type          = 'text';
                $password_edit = '';
                // if($fi['view']['flag'] == 'password') {
                   
                //    if(!empty($value)){ 
                //         $password_edit = '<input type="checkbox" name="edit" style="float:left" />脨脼赂脛脟毛鹿麓脩隆';
                //    } 
                //    $value = '';
                //    $type = 'password';
                // }

                $text="<input type=\"{$type}\" name=\"{$id}\" class=\"form-control\"";                        
                $text.="id=\"{$id}\" ";

                if(!empty($more))$text.=$more;
                
                if(isset($value)){                                
                        $text.="value=\"{$value}\" ";                                   
                }else if(isset($fi['view']['default'])) {
                        $text.="value=\"{$fi['view']['default']}\" ";  
                }else {
                        $text.="value=\"\" ";   
                }
                                                                
                $text.="/>{$password_edit}\n";
                                                                
                                                                
                return $text;
                                                                
        }
                                                                
        //脙脺脗毛驴貌潞炉脢媒
                                                                
        function form_passwd($name,$id,$label_name,$label_for,$value=""){
                                                                
                $text="<input type=\"password\" name=\"{$name}\" ";
                                                                
                $text.="id=\"{$id}\" ";
                                                                
                if(isset($value)){
                                                                
                        $text.="value=\"{$value}\" ";
                                                                
                }
                                                                
                $text.="/>\n";
                                                                
                $label=$this->form_label($label_name,$label_for);
                                                                
                $form_item=$this->form_item($label,$text);
                                                                
                return $form_item;
                                                                
        }
                                                                
        //脪镁虏脴脫貌潞炉脢媒
                                                                
        function form_hidden($name,$id,$label_name,$label_for,$value=""){
                                                                
                $text="<input type=\"hidden\" name=\"{$name}\" id=\"{$id}\" ";
                                                                
                if(isset($value)){
                                                                
                        $text.="value=\"{$value}\" ";
                                                                
                }
                                                                
                $text.="/>\n";
                                                                
                $label=$this->form_label($label_name,$label_for);
                                                                
                $form_item=$this->form_item($label,$text);
                                                                
                return $form_item;
                                                                
        }
                                                                
        //脦脛录镁脫貌潞炉脢媒
                                                                
        function form_file($name,$id,$label_name,$label_for,$size=""){
                                                                
                $text="<input type=\"file\" name=\"{$name}\" ";
                                                                
                $text.="id=\"{$id}\" ";
                                                                
                if(isset($size)){
                                                                
                        $text.="size=\"{$size}\" ";
                                                                
                }
                                                                
                $text.="/>\n";
                                                                
                $label=$this->form_label($label_name,$label_for);
                                                                
                $form_item=$this->form_item($label,$text);
                                                                
                return $form_item;
                                                                
        }
                                                                
        //赂麓脩隆驴貌潞炉脢媒
                                                                
        function form_checkbox($name,$label=array(),$label_name,$label_for=""){
                                                                
                $i=0;
                                                                
                $text=array();
                                                                
                foreach ($label as $id=>$value){
                                                                
                        $text[$i]="<input type=\"checkbox\" id=\"{$id}\" name=\"{$name}\" value=\"{$value}\" />";
                                                                
                        $text[$i].="<label for=\"{$id}\">{$value}</label>";
                                                                
                        $i++;
                                                                
                }
                                                                
                $label=$this->form_label($label_name,$label_for);
                                                                
                $form_item=$this->form_item($label,$text);
                                                                
                return $form_item;
                                                                
        }
                                                                
                                                                
        function form_radios($key, $value, $list, $attr) {
            //??????????????
            $more   = $this->get_attributes($attr);                                                                        
            $i      = 0;                                            
            $text   = array();
                

            foreach ($list as $id=>$item){
                $schecked_str = '';
                    if($value == $id) {
                        $schecked_str = 'checked';
                    }

          
                    $text[$i]="<label for=\"{$key}{$id}\" class=\"radio-inline\"><input type=\"radio\" id=\"{$key}{$id}\" name=\"{$key}\" value=\"{$id}\" {$schecked_str}/> {$item} </label>";
                    $i++;                                            
                }
                                                       
                // $label=$this->form_label($label_name,$label_for);
                        // p($text);exit;                                        
                // $form_item=$this->form_item($label,$text);
                $form_item = implode(' ', $text);                                        
                return $form_item;
                                                                
        }
                                                                
        //脧脗脌颅虏脣碌楼潞炉脢媒                     
        function form_select($key, $value, $list, $attr){
            $id         = $key;
            $options    = $list;
            $selected   = $value;
            $more          = $this->get_attributes($attr);  

            $class_str = '';                                             
            $text="<select id=\"{$id}\" name=\"{$id}\"{$class_str}{$more} class=\"form-control\">\n";


                foreach ($options as $item=>$key){ 

                        if($selected==$item){         

                                $text.="\t<option value=\"{$item}\" selected=\"selected\">{$key}</option>\n";
                                                                
                        }else{                        
                                $text.="\t<option value=\"{$item}\">{$key}</option>\n";
                                                                
                        }
                                                                
                }
                                                                
                $text.="</select>";                                        
                return $text;
                                                                
        }
                                                                
        //露脿脩隆脕脨卤铆潞炉脢媒
                                                                
        function form_selectmul($id,$name,$size,$options=array(),$label_name,$label_for){
                                                                
                $text="<select id=\"{$id}\" name=\"{$name}\" size=\"{$size}\" multiple=\"multiple\">\n";
                                                                
                foreach ($options as $value=>$key){
                                                                
                        $text.="\t<option value=\"{$value}\">{$key}</option>\n";
                                                                
                }
                                                                
                $text.="</select>\n";
                                                                
                $label=$this->form_label($label_name,$label_for);
                                                                
                $form_item=$this->form_item($label,$text);
                                                                
                return $form_item;
                                                                
        }
                                                                
        //掳麓脜楼潞炉脢媒($key, $value, $list, $attr)
                                                                
        function form_button($key, $value, $attr){
                $more          = $this->get_attributes($attr);              
                $text="<button id=\"{$key}\" {$more}" ;
                                                                   
                                                                
                $text.=">".$value;
                                                                
                $text.="</button>";
                                                                
                if($this->layout==true){
                                                                
                        $form_item="<tr>\n\t<th> </th><td>{$text}</td>\n</tr>\n";
                                                                
                }else {
                                                                
                        $form_item=$text;
                                                                
                }
                                                                
                return $form_item;
                                                                
        }
                                                                
        //脦脛卤戮脫貌潞炉脢媒
                                                                
        function form_textarea( $fi, $value=""){
                $id            = $fi['key'];                                                
                $name          = $fi['name'];     

                $classname     = $fi['view']['class'];                                                
                $more          = $fi['view']['more'];    
                $placeholder   = $fi['view']['placeholder'];    

                //脮芒脌茂脰禄麓芦陆酶脌麓脪禄赂枚class脙没鲁脝拢卢脣霉脪脭脪陋脝麓陆脫鲁脡脰碌露脭碌脛脨脦脢陆
        	if(!empty($classname))$class_str = " class=\"{$classname}\"";
                if(!empty($placeholder))$placeholder_str =' placeholder="'.$placeholder.'"';
				if(empty($value) && !empty($fi['default'])){$value = $fi['default'];}
                $text="<textarea id=\"{$id}\" name=\"{$id}\"{$class_str}{$more}{$placeholder_str}>{$value}</textarea>\n";                                      
                return $text;
                                                                
        }
                                                                
        //脦脛脳脰卤锚脟漏潞炉脢媒
                                                                
        function form_label($text,$for){
                                                                
                if($for!==""){
                                                                
                        $label="<label for=\"{$for}\">{$text}拢潞</label>";
                                                                
                }else {
                                                                
                        $label=$text."拢潞";
                                                                
                }
                                                                
                return $label;
                                                                
        }
                                                                
                                                                       
        function form_item($form_label,$form_text){
                                                                
                switch ($this->layout){
                                                                
                        case true:
                                                                
                                $text="<tr>\n";
                                                                
                                $text.="\t<th class=\"label\">";
                                                                
                                $text.=$form_label;
                                                                
                                $text.="</th>\n";
                                                                
                                $text.="\t<td>";
                                                                
                                $text.=$form_text;
                                                                
                                $text.="</td>\n";
                                                                
                                $text.="</tr>\n";
                                                                
                                break;
                                                                
                        case false:
                                                                
                                $text=$form_label;
                                                                
                                $text.=$form_text;
                                                                
                                break;
                                                                
                }
                                                                
                return $text;
                                                                
        }
                                                                
                                                                       
        function CreateForm($form_item=array()){
                                                                
                echo $this->form_start();
                                                                
                foreach ($form_item as $item){
                                                                
                        echo $item;
                                                                
                }
                                                                
                echo $this->form_end();
                                                                
        }
	
}