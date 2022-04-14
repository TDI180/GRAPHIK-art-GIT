<?php
use App\App;
use App\Table\Categorie;
use App\Table\Article;

$categorie =Categorie::find ($_GET['id']);

if($categorie===false){ App::notFound();}

$articles = Article::lastByCategory ($_GET['id']);
$categories=Categorie::all();
//var_dump ($categorie);

?>
 <p><a href="index.php?p=homeland"> PAGE---HOME----zebi </a></p>
 <h1>   <?= $categorie->titre; ?> <h1>

    <div class="row">
				<div class="col-sm-8">
				
		    <?php	
				 //$tabdata=$db->query('SELECT * FROM article','App\Table\article');
				 //var_dump ($tabdata[0]);
				 //echo $tabdata[0]->id;				
				
				//foreach ($db->query('SELECT * FROM article','App\Table\article') as $post):
				
				foreach ($articles as $post):			
				
				//var_dump($post);
			?>	
				
				<h2> <a href = " <?php echo $post->url ?> " > <?=$post->titre;?> </a> </h2>
				
			    <p>  <em>---------<?= $post->categorie; ?>---------</em> </p>
			         <p>-----------<?= $post->Extrait;?>-------------</p> 
				<?php endforeach; ?>
				
				</div>				
				
      </div>


