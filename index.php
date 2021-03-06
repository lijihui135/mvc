<?php
    
       /*
        *入口文件
        *1.定义常量
        *2.加载函数库
        *3.启动框架
        */
       define('MVC',realpath(''));
       define('CORE',MVC.'/core');
       define('APP',MVC.'/app');
       define('MODULE','app');
       define('DEBUG',true);
       
       include "vendor/autoload.php";

       if(DEBUG){
           $whoops = new \Whoops\Run;
           $errorTitle='框架出错了';
           $option = new \Whoops\Handler\PrettyPageHandler();
           $option->setPageTitle($errorTitle);
           $whoops->pushHandler($option);
           $whoops->register();
           ini_set('display_error','On');
       }else{

       	   ini_set('display_error','Off');
       }
        //dump($_SERVER);
       include CORE.'/common/function.php';
       include CORE.'/imooc.php';
       //p(MVC);
       spl_autoload_register('\core\imooc::load');
       \core\imooc::run();
?>