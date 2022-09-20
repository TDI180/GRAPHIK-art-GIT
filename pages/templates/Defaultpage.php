

<!DOCTYPE html>
 
<html lang="en">
				  <head>
					   <meta charset="utf-8">
					   <title>
							   <?php //App\App::NEWTITLE($p,$categorie->titre);
							   ?>
							   <?php
							    if($p === 'formulaire')  { echo 'PIZZAS';} else {App\Config::NEWTITLE($p,$categorie->titre);}
							     ?>
							  
					   </title>						
					          
					   <meta name="viewport" content="width=device-width, initial-scale=1.0">
					   <meta name="description" content="">
					   <meta name="author" content="">
					   <!-- Le styles -->
					
					  <link rel="stylesheet" href="">
					  <lin rel="stylesheet" href="../public/css/bootstrap.css">
					  <link rel="stylesheet" href="https://getbootstrap.com/2.0.3/assets/css/bootstrap.css">
					
				</head> 
 <body>
                 
		    <div class="navbar-navbar-fixed-top">
			</div>	 <div class="navbar navbar-fixed-top">
									  <div class="navbar-inner">
										<div class="container">											
														  <a class="brand" href="#">Project name</a>
																			  <div class="nav-collapse">
																				  
																								<ul class="nav">
																										<li class="active">  <a href="#Home">Home</a></li>																												  
																										<li class="active">  <a href="#about">About</a></li>
																										<li class="active">  <a href="#contact">Contact</a></li>
																										<li class="active">  <a href="index.php?p=formulaire&api=null&id=null">formulaire</a></li>
																										<li class="active">  <a href="index.php?p=javascript&api=null&id=null">javascript</a></li>		
																										<li class="active">  <a href="index.php?p=homeland">HOME-PAGE</a></li>																										
																										<li class="active">  <a href="index.php?p=choix&api=produit&id=null">API-REQUEST</a></li>	
																										<li class="active">  <a href="index.php?p=git&api=null&id=null">git</a></li>
																								</ul>
																					
																			  </div><!--/.nav-collapse -->
										</div>
							 </div>
        </div>
	        		
                <div class="container">
	
	            <div class="starter-template" style="padding-top:200px">	
		 
			<?=$content;?>
			  
		</div>
    </div> <!-- /container -->

  
  </body>
</html>