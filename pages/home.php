
 <h2> i am on the HOME-PAGE 
						   <p>
						 
							 <a>NOURDINNE ADORE LA PLAYSTATION</a>
						 
						   </p>
    <ul>

		    <?php	
				 //$tabdata=$db->query('SELECT * FROM articles','App\Table\article');
				 //var_dump ($tabdata[0]);
				 //echo $tabdata[0]->id;				
				
				//foreach ($db->query('SELECT * FROM articles','App\Table\article') as $post):
				//echo "The full path of this file is: " . __FILE__;
				//echo "The directory of this file is: " . __DIR__;
				//echo dirname('G:\wamp64\www\GRAPHIKart\blog\app\table',6);
				echo dirname(__FILE__);
				echo'<br>';
				echo __FILE__;
				
				foreach (\App\Table\article::getLast() as $post):
				
				//var_dump ($post);

			?>
				<h2>---------- <a href="<?php echo $post->url ?>"> <?= $post->titre; ?> </a>-------------</h2>
				 <p>  <em>---------<?= $post->categorie; ?>---------</em> </p>
				<p>
				    <?php echo $post->Extrait;?> 
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


				  
 
  
 
