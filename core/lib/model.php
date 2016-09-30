<?php 

    namespace core\lib;
    use core\lib\conf;
    class model extends \medoo
    {
    	 public function __construct()
    	 {
    	 	 // $dsn='mysql:host=127.0.0.1;dbname=test';
    	 	 // $username='root';
    	 	 // $passwd='root';
             $option = conf::all('database');
             parent::__construct($option);
    	 }
    }

?>