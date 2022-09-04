<h1>constrution du formulaire </h1>


<h1> composez votre pizza</h1>
<p>choissisez vos ingrédients</p>

  <form action="../pages/yourpizza.php" method="get">
      <div class="form-group">
          <input type="checkbox" name="sauce-tomate" value="sauce-tomate">base sauce tomate</input>
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