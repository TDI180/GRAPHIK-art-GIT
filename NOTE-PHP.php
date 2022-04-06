

     Scope Resolution Operator (::) --> double-colon=token ---->
	 
	 allows access to static, constant, and overridden properties or methods of a class	 
	 
	 
				<?php
							class OtherClass extends MyClass
							{
								public static $my_static = 'static var';

								public static function doubleColon() {
									echo parent::CONST_VALUE . "\n";
									echo self::$my_static . "\n";
								}
							}

							$classname = 'OtherClass';
							$classname::doubleColon();

							OtherClass::doubleColon();
				?>
				
			PHP Operators

           remark : ne pas melanger les fonctions public et privée 
           on peut faire un call de variable static dans une fonction public
		  
		  
		  Operator 	Name 	    Example 	Result 	Show it
	         == 	Equal 	    $x == $y 	Returns true if $x is equal to $y 	
            === 	Identical 	$x === $y 	Returns true if $x is equal to $y, and they are of the SAME TYPE
			
			
			Singleton : instance unique d'une classe
			
			patron de conception ----> design pattern 
			
			SINGLETON == DESIGN PATTERN	----> objectif  en POO : avoir une seule instance unik de la classe ds le programme
			
			dirname () — Returns a parent directory's path
			dirname(string $path, int $levels = 1): string
			
			__FILE__ constant returns full path and name of the PHP file that's being executed.
					If used inside an include, the name of the included file is returned.
					
					<?php
						// Displays the absolute path of this file
						echo "The full path of this file is: " . __FILE__;
					?>
					
			__LINE__  constant returns the current line number of the file, like this:	

                <?php
					echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 2
					echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 3
					echo "Line number " . __LINE__ . "<br>"; // Displays: Line number 4
				?>				   
			
			
			<?php
 
class Singleton {
					 
					  /**
					   * @var Singleton
					   * @access private
					   * @static
					   */
					   private static $_instance = null;
					 
														   /**
															* Constructeur de la classe
															*
															* @param void
															* @return void
															*/
					   private function __construct() {      }
					 
														   /**
															* Méthode qui crée l'unique instance de la classe
															* si elle n'existe pas encore puis la retourne.
															*
															* @param void
															* @return Singleton
															*/
					   public static function getInstance() {
					 
															 if(is_null(self::$_instance)) {
															                                 self::$_instance = new Singleton();  
															                               }
					 
															  return self::$_instance;
					                                         }
				}
 
?>
	
   remarque :  echo '$notes' -----> renvoie $notes
               echo "$notes" -----> renvoie contenu de $notes


    $action = (int)readline ('entrer-data');			   
		le keyword	(int) definit la nature de la variable que l on veut obtenir		 
	echo "$action";				 
					 