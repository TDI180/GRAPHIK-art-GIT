<?php
					require  '../app/Autoloader.php';
					App\Autoloader::register(); //  call classes
					/* TEST KEY SSH COMMAND GIT PUSH MUST ASK FOR THE PASSWORD 
                       TEST HTTPS -----------> GIT PUSH
					*/
				     $config = App\Config::getInstance();					
					  echo '<br>';echo '<br>'; var_dump($config);					
					  //echo  App\Config::getInstance()->get('db_user');
					if (isset($_GET['p'])) 
					{
						$p=$_GET['p'] ;
					}
						else 
						{
							$p='homeland';
							
						}
										   //object initialisation database
										   $db = new App\Database ('blog','','','');
										   App\App::getDb();
										   
										   ob_start ();
														if ($p=== 'homeland') 
																			{
																			 require '../pages/home.php' ;																		 
																			}
																			elseif  ($p=== 'single' )
																			{ 
																			 require '../pages/single.php' ; 
																			}
																			elseif  ($p=== 'article' )
																			{ 
																			 require '../pages/single.php' ; 
																			}
																			elseif  ($p=== 'categorie' )
																			{ 
																			 require '../pages/categorie.php' ; 
																			}
													
											$content=ob_get_clean ();	
											require '../pages/templates/defaultpage.php' ; 					