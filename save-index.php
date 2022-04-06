<?php
					require  '../app/Autoloader.php';
					App\Autoloader::register(); //  call classes
					/* TEST KEY SSH COMMAND GIT PUSH MUST ASK FOR THE PASSWORD 
                       TEST HTTPS -----------> GIT PUSH
					*/
					  echo '<br>';echo '<br>';
					    echo '<br>';echo '<br>';
				     $config = App\Config::getInstance();
					// $config = App\Config::getDB();
					 var_dump($config);
					 
					  echo '<br>';echo '<br>'; var_dump($config);					
					 echo  App\Config::getInstance()->get('db_user');
					 var_dump ( App\Config::getInstance()::getDB());
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