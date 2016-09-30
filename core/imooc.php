<?php 
   
namespace core;

class imooc{
      public static $classMap=array();
      public $assign;

      static public function run(){
            
             //p("ok");
            \core\lib\log::init();
            \core\lib\log::log('test');
        	 $route=new \core\lib\route();
           $ctrlClass = $route->ctrl;
           $action = $route->action;
           $ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
           $cltrlClass = '\\'.MODULE .'\ctrl\\'.$ctrlClass.'Ctrl';
           //p($ctrlfile);
           if(is_file($ctrlfile)){
                
                  include $ctrlfile;
                  $ctrl=new $cltrlClass();
                  $ctrl->$action();
           }else{

               throw new \Exception('找不到控制器'.$ctrlClass);
           }
      }

      static public function load($class){
            
        	 if(isset($classMap[$class])){
                  return true;
        	 }else{
                     $class=str_replace('\\', '/',$class);
                     $file = MVC.'/'.$class.'.php';
                     //p($file);
		        	 if(is_file($file)){
		                  
		                   include $file;
		                   self::$classMap[$class] = $class;
		        	 }else{
		        	 	return false;
		        	 }
        	 }
        	
      }

      public function assign($name,$value)
      {
           
           $this->assign[$name] = $value;
      }
      public function display($file)
      {
          $file = APP.'/views/'.$file;
         // p($file);
          //p($this->assign);exit();
          if(is_file($file)){
                 //p($this->assign);exit();
                 extract($this->assign);
                 include $file;
          }else{

               p("1");
          }
      }
}



?>
