
 <h2>  </h2>
						   <p>
						       <li class="active"> <a href="formulaire.php">      </a></li>
						       <li class="active"> <a href="pages\formulaire.php"></a></li>
							   <a> </a>
						   </p>
    <ul>

		    <?php	
			
			class foofoo {
			         	static public function test() {
					    var_dump(get_called_class());
			        	}
		        	}
			
					class bar extends foofoo {
					}
					
					foofoo::test();
					bar::test();
			    				 
				 //$tabdata=$db->query('SELECT * FROM articles','App\Table\article');
				 //var_dump ($tabdata[0]);
				 //echo $tabdata[0]->id;				
				
				//foreach ($db->query('SELECT * FROM articles','App\Table\article') as $post):
				//echo "The full path of this file is: " . __FILE__;
				//echo "The directory of this file is: " . __DIR__;
				//echo dirname('G:\wamp64\www\GRAPHIKart\blog\app\table',6);
				/*echo dirname(__FILE__);
				echo'<br>';
				echo __FILE__;*/
				
				//foreach (App\Table\article::getLast2() as $post):	
				//echo $_GET["id"];-----------> c dans la balise href que $_get recupere les données
				//echo $_GET["p"];
				foreach (App\Table\article::getLast() as $post):
			?>
				<h2>AAAA---------- <a href="<?php echo $post->url ?>"> <?= $post->titre; ?> </a>------------AAAAA-</h2>
				
				 <p>  <em>************<?= $post->categorie; ?>************</em> </p>
				<p>
				    <?php echo $post->Extrait;
					     // var_dump ($post);
						//var_dump ($post->url);
					?> 
				</p>
			
	        <?php endforeach; ?>
			
			<div class="col-sm-4">
				
				       <ul>
					         <?php foreach (\App\Table\Categorie::all() as $categorie):?>
							               <li> <a href=" <?=$categorie->url;?> "><?=$categorie->titre;?></a></li>
							 <?php endforeach;
							    //echo $categorie->titre;
							    //var_dump ($categorie->titre);
							 ?>
					         
					   </ul>
				</div>
   </ul>


				  
 
  
 
