<?php
namespace App\Table;
use App\App;

class Table {	
	 
				/*TEST DE LA BRANCHE */

				/* La surcharge magique en PHP permet de "créer" dynamiquement des propriétés et des méthodes. 
				    Ces entités dynamiques sont traitées via des méthodes magiques établies que l'on peut positionner dans une classe pour divers types d'actions.
                    Les méthodes magiques de surcharge sont appelées lors de l'interaction avec des propriétés ou des méthodes qui n'ont pas été déclarées 
				    ou ne sont pas visibles dans le contexte courant. 
				    Le reste de cette section utilise les termes de "propriétés inaccessibles" et de "méthodes inaccessibles"
				    pour se référer à cette combinaison de déclaration et de visibilité. 
				 */
				 
				/*
				   __set() est sollicitée lors de l'écriture de données vers des propriétés inaccessibles (protégées ou privées) ou non existante. 
				*/ 
				
			public static $table;
			
			public static function query ($statement,$attributes = null,$one=false){
				
				if ($attributes) {
									return App::getDb()->prepare ($statement,$attributes,get_called_class(),$one); 

					             } 
								 else { 
								    return App::getDb()->query($statement,get_called_class(),$one);
								      }

				}

			public static function find ($id) 
			
			 {
				//echo static::getTable() ;
			    return App::getDb()->prepare("SELECT * FROM ". static::getTable()." WHERE id= ?",[$id],get_called_class(),true);
			 }
			 
			public static function getTable ()
			     {	
						$class_name = explode ('\\',get_called_class());						
						//echo get_called_class().'</br>';
						//self::$table = __CLASS__; 
						
						static::$table = strtolower(end($class_name)); // ils gardent la fin
						//echo end($class_name).'</br>'; 
						//echo static::$table.'</br>';
						//die (static::$table);	The die() function is an alias of the exit() function.
					//die (static::$table);
					
					return static::$table;
				 }
				 
			 
			 public static function all(){		
										 
						           	      return App::getDb()->query(" SELECT * FROM " . static::getTable() ."",get_called_class());	
										  
										 }	

										  
			 public function __get($key) //methode magik a revoir
				 
										   {
											//var_dump ($key);											
											$method = 'get'.ucfirst($key);	
										    //echo '-------------------';
											//var_dump ($this);
											//echo '-------------------';
											
											$key=$this->$method();
											 /* on rajoute les accolade et ca donne un appel de getURL() ou getExtrait()*/
											//echo '*****************';
											//var_dump ($key);
											//echo '*****************';
											return $key;
										  }							 												  
			
		    				
				 
			public function getExtrait_full()
				 {
					$html='<p>'. $this->contenu .'....</p>';
					//$html .= '<p><a href="'.$this->getURL() .'"> Voir la suite</a> </p>';
					
					return $html;
				 }
				 		
	
             }    