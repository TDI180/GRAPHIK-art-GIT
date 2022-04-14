<?php
					require  '../app/Autoloader.php';
					App\Autoloader::register(); //  call classes

					/* TEST KEY SSH COMMAND GIT PUSH MUST ASK FOR THE PASSWORD 
                       TEST HTTPS -----------> GIT PUSH*/
					  echo '<br>';echo '<br>';
					  echo '<br>';echo '<br>';
				     $config = App\Config::getInstance();
					 class Foo {

									  public function register() {
																	spl_autoload_register([__CLASS__,'load'],true,true);
									                              }

									  private static function load()  {
										                              // echo '---ffo----';
									                                  }
						    	}

					$autozebi = new Foo();
					$autozebi->register();
					$foo='aze';
					//echo &$foo;
					
					function add_five(&$value) {$value += 5;}

					$num = 2;
					add_five($num);
					//echo $num;
																			 
					 
					// var_dump ($config);
					
					 
					// echo '<br>';echo '<br>'; var_dump($config);					
					 //echo  App\Config::getInstance()->get('db_user');
					// echo  App\Config::TESTthis();
					 //var_dump(App\Config::getInstance()::getDB());
					 
					 //$termakbira = new App\terma (); // you need to instanciate the object 					 
					 //echo $termakbira->appel();
					 
					/* $strings = ["apple", "orange", "banana", "coconut"];
													$lengths = array_map("my_callback", $strings);
													print_r($lengths);
					 function my_callback($item) {
													return strlen($item);
												 }*/
					 
					if (isset($_GET['p']) && isset($_GET['api']) && isset($_GET['id'])) 
					{
						$p=$_GET['p'];
						$api=$_GET['api'];
						$id=$_GET['id'];
					}
					else 
					{
					    $p='homeland';
					}
										  //object initialisation database
										 //$db = new App\Database ('blog','','','');
										//var_dump(App\App::getDb());
									   //var_dump(App\Config::getInstance()::getDB());
										   ob_start ();
														if ($p==='homeland') 
																			{
																			 require '../pages/home.php' ;																		 
																			}
																			elseif  ($p=== 'single' && $api==='null' )
																			{ 
																			 require '../pages/single.php' ; 
																			}
																			elseif  ($p==='article'&& $api==='null')
																			{ 
																			 require '../pages/single.php' ; 
																			}
																			elseif  ($p==='categorie' && $api==='null' && $id==='1')
																			{ 
																			    require '../pages/categorie.php'; 
																			}
																			elseif  ($p==='categorie' && $api==='null' && $id==='2')
																			{
																				require '../pages/categorie.php';
																			}
																			elseif  ($p=== 'Javascript' && $api==='null')
																			{ 
																			    require '../pages/formulaire.php' ; 
																			}
																			elseif  ($p=== 'Javascript' )
																			{ 
																			    require '../pages/javascript.php' ; 
																			}
																			elseif  ($p=== 'git' && $api==='null')
																			{ 
																			    require '../git/git-test.html' ; 
																			}

																			
																			
										if ($p==='choix' && $api==='zebi') 
																			{
																			  //if ($request_method==='')	{}
																			    require '../API/Request-method.php' ; 																		 
																			}
																			elseif($p==='choix' && $api==='get')
																			{ 
																				require '../API/produits.php' ; 	
																			}																				
																			elseif($p==='choix' && $api==='post')
																			{ 
																				require '../API/produits.php' ; 	
																			}
																			elseif($p==='choix' && $api==='Create')
																			{ 
																				require '../API/produits.php' ; 
																			}
																			elseif($p==='choix' && $api==='Read')
																			{ 
																				require '../API/produits.php' ; 	
																			}
																			elseif($p==='choix' && $api==='Update')
																			{ 
																				require '../API/produits.php' ; 	
																			}
																			elseif($p==='choix' && $api==='Delete')
																			{ 
																				require '../API/produits.php' ; 	
																			}



																			
											$content=ob_get_clean ();	
											require '../pages/templates/defaultpage.php' ; 					