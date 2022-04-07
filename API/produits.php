<?php ?>
<p>********************************RESULTAT**********************************************</p>

<li class="active">  <a href='index.php?p=choix&api=zebi'>API-REQUEST</a></li>
<a href="index.php?p=homeland"> PAGE---HOME </a> 
<?php
                $request_method=$_GET['api'];
				switch($request_method)
											{
												case  'get': 	
													foreach (App\Table\article::getProduit() as $post):?>
													 <h2>----------> <a href="<?php echo $post->url ?>"> <?= $post->name; ?> </a></h2>
													 <p>  <em>DESCRIPTION :---><?= $post->description; ?></em> </p>
													 <p>  <em>LE PRIX EST :----><?= $post->price; ?></em> </p>														 
													 <?php

													 //header('Content-Type: application/json');
													//echo json_encode($post, JSON_PRETTY_PRINT);
													endforeach;	?>
													<p>  <em>------------JSON-------------------></em> </p>	
													<?php	
													foreach (App\Table\article::getProduit() as $post):
														echo json_encode($post, JSON_PRETTY_PRINT);	
														echo '<br>';	
													endforeach;	
												break;

												case  'post':
													echo 'tu veux poster koi ?';													
												break;

												case  'Create':
													echo '-----Create';													
												break;

												case  'Read':
													echo '-------Read';													
												break;

												case  'Update':
													echo '-----Update';													
												break;

												case  'Delete':
													echo '------Delete';													
												break;

												default:
												//Requête invalide
												header("HTTP/1.0 405 Method Not Allowed");
												break;
											}
?>
