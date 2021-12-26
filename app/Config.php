<?php
namespace App;       

class Config {
				private $settings = [];
				private static $_instance;
				
				public static function getInstance()
				
				{
					
					if(is_null(self::$_instance)) { self::$_instance=new Config();}
					 return self::$_instance;
				}
				    
				
				public function __construct(){	
				//$this->id = uniqid(); definit un unik id --> le construct cree un unik instance
				
				$this->settings = require dirname(__DIR__) . '/config/config.php'; 
				//echo '<br>';echo '<br>';
				//var_dump (require dirname(__DIR__). '\config\config.php');
				//var_dump ($this->settings);				
				}
				
				public function get ($key)
				{

                   if(!isset($this->settings[$key])) { return null;}
				    else { return $this->settings[$key];}
					
				}
				
				 public static function getDB() {

              	 if (self::$database === null){ self::$database = new Database(self::DB_NAME,self::DB_USER,self::DB_PASS,self::DB_HOST);}									   
						                     
	                                            }
 
 
 