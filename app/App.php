<?php
namespace App;       

class App {
		    
 			 public function __construct() {
                                             echo 'I am in '.__CLASS__.'</br>';
                                           }
			 
		     const DB_NAME='blog';
			 const DB_USER='root';
			 const DB_PASS='root';
			 const DB_HOST='localhost';
		  
		     private static $database;
			 public $title ='frite-harissa';
			 public static $title_2;			 
			 

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
												   
			  public static function NEWTITLE($p,$cat) {									              
											            
														 if ($p==='homeland') { echo 'STARTER-TEMPLATE'; } else {echo $cat;}
												      				  
				                                       }	

			  public function get_TITLE() {	 
											 //echo 'zebi-kbir';
											//echo self::$title;
											return $this->title;
										  }
												
			  public static function set_TITLE($title){	 
												           return self::$title_2=$title;
											          }	
												      
           }
				 
				 
 