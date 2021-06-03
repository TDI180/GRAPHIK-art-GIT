<?php
namespace App ; 
		 require 'App\autoloader_Name_spaces.php';
		 //require __DIR__ .'\\'."App\autoloader.php";
		 autoloader::register(); //  call classes
		 
	        	// var_dump(autoloader::register());
		 
		
				/*spl_autoload_register (  function ($class) {  
				                                                                     echo ($class.'<br>');
																					 $class2=str_replace( __NAMESPACE__ .'\\','', $class);	
																					 echo ($class2.'<br>');
				                                                                     include ( 'box\minibox'.'\\'.$class2.'.php') ;
																					 echo ('<br>');
				                                                                   } );*/
				//echo (__DIR__);		
				echo ('<br>');
				
				//$a=new box_1;/*__CLASS=box_1---> spl autiload register va construire l include correspondant*/
				
				box_1::box();
				echo ('<br>');
				box_2::box();
			    echo ('<br>');
				box::labox();
				  
?>
