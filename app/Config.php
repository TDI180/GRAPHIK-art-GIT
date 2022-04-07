<?php
namespace App;       
				/*class terma { 
								public function __construct()
								
								{	
										
								}
								
								private static  $zebi = '25cm';
								
																 private  function TESTthis()
																
																	{					
																		return  self::$zebi;
																	}	
																
																
																public function appel() 
																
																	{
																		//echo 'zebi';
																		
																		return self::$zebi;
																	}
							}*/

class Config {
				private static  $settings =[];
				private static  $foo ='25cm';
				private static  $_instance=null;
				private static  $_instance2=null;
				private static  $database;
				public          $id;				
				
				
				public static function getInstance()				
								{								 
								  if(is_null(self::$_instance)) { self::$_instance=new Config();}	
								  return self::$_instance;
								}
				
				public static function getInstance2()				
								{
								  self::$_instance2=new Config();				 	
								  return self::$_instance2;
								}
				public static function TESTthis(){return  self::$foo;}	
				
				public function UnikID(){return  $this->id = uniqid();}	
				
				public function __construct(){	
				                                //echo self::UnikID();//call the function to test if the instance is unik
											    //echo $this->id = uniqid();// call the properties directly
												//echo static::$id = uniqid(); //definit un unik id --> le construct cree un unik instance
												
												static::$settings = require dirname(__DIR__) . '/config/config.php'; 
												//echo '<br>';echo '<br>';
												//var_dump (require dirname(__DIR__). '\config\config.php');
												//var_dump ($this->settings);				
				                              }
				
				public function get ($key)
				{
				
					//var_dump( self::$settings['db_user']);
                   if(!isset(self::$settings[$key])) { return null;}
				    else { return self::$settings[$key];}					
				}
				
				 public  static function getDB() //connexion unik
				 {
				  					
				   	// self::TESTthis();
					// var_dump( self::$settings['db_user']);
					 
				   if (self::$database === null)
				       { 
				   
					self::$database = new Database(static::$settings['db_name'], static::$settings['db_user'],static::$settings['db_pass'],static::$settings['db_host']);
			           } // $database = new Database(self::DB_NAME,self::DB_USER,self::DB_PASS,self::DB_HOST);	
 
					  return self::$database;
				 }
				 
				 
				  public static function NEWTITLE($p,$cat) {									              
											            
														 if ($p==='homeland') { echo 'STARTER-TEMPLATE'; } else {echo $cat;}
												      				  
				                                       }	
					  
}

?>	  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
					  
 