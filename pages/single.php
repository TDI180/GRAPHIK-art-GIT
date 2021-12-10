<?php
use App\App;
use App\Table\Categorie;
use App\Table\Article;
?>			  
				  
    <p> <h1> <a href="index.php?p=homeland"> PAGE---HOME </a> </h1> </p>
	
	 <h2> i am on the SINGLE-PAGE------> test-git <h2>
				 
<?php
			  
			//$tabdata=$db->query('SELECT * FROM articles','App\Table\article');
			
			//----------------echo  $tabdata[$_GET['id']]->contenu;
			//echo $tabdata[$_GET['id']]-> getExtrait_full(); the first index array = 0--d ou le décalage du contenu
			//echo $tabdata[0]-> getExtrait_full();
			
			//var_dump ($tabdata);
			//var_dump ($tabdata[ $_GET['id']]);
			//echo $tabdata[ $_GET['id']];			
			// var_dump ($tabdata[$_GET['id']]->contenu);
			//$zebi=Article::getTable();
			
            //$post =Categorie::find($_GET['id']);
						
			$post= Article::find($_GET['id']);// select all the contain from article and put the contain in the object 'article
			if($post===false){ App::notFound();}
			$categorie =Categorie::find($post->category_id);
			
			//var_dump ($post);	
			//var_dump($categorie);	
			
			
			/*$post = $db->prepare ('SELECT * FROM article WHERE id=?',[$_GET['id']],'App\Table\Article',true);
			  $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
		      $pieces = explode('\\',$pizza);
			  test methode explode ();
			  end($pieces);
			  echo end($pieces); // piece1*/	
?>	
	
		<p><?= $post->titre;?></p>
		
		<p>CATEGORIE--><em> <?=$categorie->titre;?></em></p>  
				
	    <p><?= $post->contenu;?></p>
	  
	  
		
	
	
			
			
			