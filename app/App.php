<?php
namespace App;       

 class App {
		  
		     const DB_NAME='blog';
			 const DB_USER='root';
			 const DB_PASS='root';
			 const DB_HOST='localhost';
		  
		     private static $database;

             public static function getDB() {

              if (self::$database === null){
   				                             self::$database = new Database(self::DB_NAME,self::DB_USER,self::DB_PASS,self::DB_HOST);													   
						                   } 
										   
			  return self::$database;							  

				                           }
				  
			 public static function notFound () {

												    header ("HTTP/1.0 404 Not Found");
													header ('Location:index.php?p=404');
					                            }
												
			 public static function TITLE($c,$a,$p) {									              
											     //echo '----->'.$a;  
											     //$p='homeland';
											     if($p==='homeland'){echo '--starter-template---';} 
												          else {
															     if($p==='categorie') {echo $c;} else {echo $a;}
												               }
												return 0 ;			   
											    								  
				                              }		
												
           }
				 
				 
 