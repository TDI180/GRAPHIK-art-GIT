
<?php
  $pizza=[ 
           'margarita'=>'sauce tomate,fromage,12-euros',
           'fromage'=>'sauce tomate,fromage,chevre,emmental,13-euros',
           'orientale'=>'sauce tomate,fromage,merguez,poivrons,oignon,oeuf,14-euros',
           '4-saisons'=>'sauce tomate,fromage,jambon,artichaut,champignon,15-euros'          
         ];

  $boissons=['coca','orangina','oasis','schweppes','hawai'];    

  $pizzeria=[ 
                      ['margarita'=>'12euros',
                      '4-fromage'=>'13euros',
                      'orientale'=>'14euros',
                      '4-saisons'=>'15=euros'], 
            ['coca','orangina','oasis','schweppes','hawai']
    ];   


    foreach( $pizzeria as $result) {
      foreach ($result as $key => $value) {
         // echo $key."-".$value."<br />";
      }
  }

  //var_dump ($boissons);
  //echo $pizza ['margarita'].'<br>';
  foreach ($pizza as $key=>$value) {
                                //echo '<h3>'. $value.'</h3>'.'<br>';
                                //echo  '<h3>--the-key--'. $key .'----contient la valeur-----'. $value .'----' .'</br>';
                                   }

  foreach ($boissons as $drink) {
                                 // echo '<h3>'. $drink.'</h3>'.'<br>';
                                }
     $zebi='20cm';  
?>
<h1>constrution du formulaire </h1>
<h1> composez votre pizza</h1>
<p>choissisez vos ingrédients</p>

<form action="../pages/PANIER.php" method="get">
                   <div>
                        <?php foreach ($pizza as $key=>$value):?>
                          <label>
                               <input type="checkbox" name="<?=$key?>" value="<?=$key?>-----<?=$value?>"unchecked><?=$key?></input></br>
                               <?php echo $value; ?>
                        </label>     
                        <?php endforeach;?>
                       
                  </div>
      <button type="submit" value ="ok" class="btn">ENVOYER</button>
  </form>

  <p>
				<li class="active"> <a href="formulaire.php">      </a></li>
				<li class="active"> <a href="G:\wamp64\www\GRAPHIKart\blog\public">GO TO YOUR PIZZA</a></li>
        <li class="active"> <a href="index.php?p=yourpizza&api=null&id=null">go to your pizza</a></li>
							  
  </p>

<h1>Prix total de votre pizzas</h1>

<?php

echo $_SERVER['SERVER_NAME'];
echo '<br>';

echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>';

echo $_SERVER['REMOTE_ADDR'];
echo '<br>';

//echo $_SERVER['PATH_INFO'];

// URL MAPPING


$colors = array("red", "green", "blue", "yellow");
$colors = array("", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?> 